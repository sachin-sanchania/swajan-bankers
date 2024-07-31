@extends('admin-views.layouts.app')

@section('title','Testimonial')

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
                        <form id="form" name="form" method="POST" class="form-horizontal" action="{{isset($data) ? route('admin.testimonial.update',$data['id']) : route('admin.testimonial.store')}}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" id="id" name="id" value="{{$data['id']??''}}">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right"> Name <span class="text-danger">*</span></label>
                                <div class="col-md-4">
                                    <input type="text" name="name" id="name" placeholder="Enter Founder Name Here" class="form-control" value="{{$data['name']??''}}" autofocus>
                                </div>
                                <label class="col-md-2 col-form-label text-right"> Place <span class="text-danger">*</span></label>
                                <div class="col-md-4">
                                    <input type="text" name="place" id="place" placeholder="Enter Founder Place Here" class="form-control" value="{{$data['place']??''}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-md-4 col-form-label text-right"> Description <span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <textarea class="form-control" onkeyup="countChar(this)" rows="4" name="description" id="description" placeholder="Enter Description Here">{{$data['description']??''}}</textarea>
                                    <span class="pull-right text-info font-bold" id="charCounterDiv" >Characters : <span id="textCounter">0</span> / 350</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right">Image</label>
                                <div class="col-md-3">
                                    <input type="file" name="image_path" id="image_path" class="form-control" accept="image/png, image/jpeg"  tabindex="3">
                                    <label class="text-info">File Size : 400x350px. Format : (.png,.jpeg)</label>
                                </div>
                                @if(isset($data) && $data['image_path'] != "")
                                    <div class="col-md-1" id="removeImageDiv">
                                        <span class="removePic"><i class="fa fa-times"></i> </span>
                                        <a href="../../../uploads/testimonial/{{$data['image_path']}}" id="link_slider_photo_path" target="_blank">
                                            <img src="../../../uploads/testimonial/{{$data['image_path']}}" height="70" width="70" id="product_path_preview" style="width: 100%">
                                        </a>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-offset-2 col-md-10">
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
    <script type="text/javascript">
        $(function () {
            @if(isset($data))
                $("#description").trigger('keyup');
            @endif
            $("#form").validate({
                rules:{
                    name: { required: true },
                    place: { required: true },
                    description: { required: true },
                },
                messages:{
                    name: {required:"Name cannot be empty."},
                    place: {required:"Place cannot be empty."},
                    description: {required:"Description cannot be empty."},
                },
            });

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
                            url : '{{route("admin.testimonial.delete-image")}}',
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
            if (len > 350) {
                val.value = val.value.substring(0, 350);
                $("#charCounterDiv").removeClass('text-info').addClass('text-danger')
            } else {
                $("#charCounterDiv").removeClass('text-danger').addClass('text-info')
                $('#textCounter').text(len);
            }
        }
    </script>
@endsection
