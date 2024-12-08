@extends('admin-views.layouts.app')

@section('title','Events')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2 class="col-sm-9">{{ucwords($prefix)}}</h2>
        </div>
    </div>

    @include('admin-views.layouts.partials._alerts')

    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>{{isset($data)?'Update':'Add'}} {{ucwords($prefix)}}</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form id="form" name="form" method="POST" action="{{isset($data) ? route('admin.events.update',$data['id']) : route('admin.events.store')}}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" id="id" name="id" value="{{$data['id']??''}}">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right"> Title <span class="text-danger">*</span></label>
                                <div class="col-md-4">
                                    <input type="text" name="title" id="title" placeholder="Enter Event Title Here" class="form-control" value="{{$data['title']??''}}" autofocus>
                                </div>
                                <label class="col-md-2 col-form-label text-right"> Date <span class="text-danger">*</span></label>
                                <div class="col-md-2">
                                    <input type="text" name="date" id="date" placeholder="Enter Event Date Here" class="form-control" value="{{isset($data) ? date("d-m-Y",strtotime($data['date'])):''}}" readonly>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group clockpicker" data-autoclose="true">
                                        <input type="text" name="time" id="time" class="form-control" placeholder="Enter Time (24 Hour)" value="{{isset($data) ? date("H:i",strtotime($data['time'])):''}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right"> Description <span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <textarea class="form-control" onkeyup="countChar(this)" rows="4" name="description" id="description" placeholder="Enter Description Here">{{$data['description']??''}}</textarea>
                                    <span class="pull-right text-info font-bold" id="charCounterDiv" >Characters : <span id="textCounter">0</span> / 300</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right"> Venue <span class="text-danger">*</span></label>
                                <div class="col-md-4">
                                    <input type="text" name="place" id="place" placeholder="Enter Event Venue Here" class="form-control" value="{{$data['place']??''}}">
                                </div>

                                <label class="col-md-2 col-form-label text-right">Image</label>
                                <div class="col-md-3">
                                    <input type="file" name="image_path" id="image_path" class="form-control" accept="image/png, image/jpeg"  tabindex="3">
                                    <label class="text-info">File Size : 600x600px. Format : (.png,.jpeg)</label>
                                </div>
                                @if(isset($data) && $data['image_path'] != "")
                                    <div class="col-md-1" id="removeImageDiv">
                                        <span class="removePic"><i class="fa fa-times"></i> </span>
                                        <a href="../../../uploads/events/{{$data['image_path']}}" id="" target="_blank">
                                            <img src="../../../uploads/events/{{$data['image_path']}}" height="70" width="70" id="" style="width: 100%">
                                        </a>
                                    </div>
                                @endif

                            </div>
                            <div class="form-group row">
                                <div class="col-md-offset-2 col-md-10">
                                    <button class="btn btn-sm btn-primary" id="submitButton" type="submit">{{isset($data)?'Update':'Save'}}</button>
                                    <a href="{{admin_url($prefix)}}"><button class="btn btn-sm btn-danger ml-5p" type="button">Cancel</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="{{asset('admin-assets/css/plugins/clockpicker/clockpicker.css')}}">
    <script src="{{asset('admin-assets/js/plugins/clockpicker/clockpicker.js')}}"></script>
    <script type="text/javascript">
        $(function () {
            @if(isset($data))
            $("#description").trigger('keyup');
            @endif
            $("#form").validate({
                rules:{
                    title: { required: true },
                    description: { required: true },
                    place: { required: true },
                },
                messages:{
                    title: {required:"Title cannot be empty."},
                    date: {required:"Date cannot be empty."},
                    time: {required:"Time cannot be empty."},
                    description: {required:"Description cannot be empty."},
                    place: {required:"Venue cannot be empty."},
                },
            });

            $('#date').datepicker({
                format: 'dd-mm-yyyy',
                autoclose: true,
                todayHighlight: true
            });

            $('.clockpicker').clockpicker();

            $(document).on('click', '.removePic', function (e) {
                e.preventDefault();
                var id = $(this).attr('data-id');
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this image!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes",
                    cancelButtonText: "Cancel",
                    closeOnClickOutside: false,
                },function (isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                            type : 'POST',
                            url : '{{route("admin.events.delete-image")}}',
                            data : {
                                id:$("#id").val(),
                                _token:$("[name=csrf-token]").attr('content')
                            },
                            dataType:"JSON",
                            success : function(data){
                                if(data.result == true){
                                    $("#removeImageDiv").remove()
                                }
                                else{
                                    swal("Error!", data.message, "error")
                                }
                            }
                        });
                    }
                });

            });

        });
        function countChar(val) {
            var len = val.value.length;
            if (len > 300) {
                val.value = val.value.substring(0, 300);
                $("#charCounterDiv").removeClass('text-info').addClass('text-danger')
            } else {
                $("#charCounterDiv").removeClass('text-danger').addClass('text-info')
                $('#textCounter').text(len);
            }
        }
    </script>
@endsection
