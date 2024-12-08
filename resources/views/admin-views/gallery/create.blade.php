@extends('admin-views.layouts.app')

@section('title','Gallery')

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
                        <form id="form" name="form" method="POST" action="{{isset($data) ? route('admin.gallery.update',$data['id']) : route('admin.gallery.store')}}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" id="id" name="id" value="{{$data['id']??''}}">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right"> Title </label>
                                <div class="col-md-4">
                                    <input type="text" name="title" id="title" placeholder="Enter Gallery Caption Here" class="form-control" value="{{$data['title']??''}}" tabindex="1" autofocus>
                                </div>
                                <label class="col-md-2 col-form-label text-right"> Display Order <span class="text-danger">*</span></label>
                                <div class="col-md-4">
                                    <input type="number" name="order" id="order" placeholder="Enter Display Order Of Image Here" class="form-control" value="{{$data['order']??''}}" tabindex="2">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right"> Type <span class="text-danger">*</span></label>
                                <div class="col-md-4">
                                    <select name="type" id="type" placeholder="Enter Type" class="form-control" tabindex="3">
                                        <option value="">Please Select Type</option>
                                        <option value="image" @if(isset($data) && $data['type'] === 'image') selected @endif>Image</option>
                                        <option value="video" @if(isset($data) && $data['type'] === 'video') selected @endif>Video</option>
                                    </select>
                                </div>
                                <label class="col-md-2 col-form-label text-right"><span id="labelUpload">Image</span> <span class="text-danger">*</span></label>
                                <div class="col-md-3">
                                    <input type="file" name="image_path" id="image_path" class="form-control" accept="image/png, image/jpeg"  tabindex="4">
                                </div>
                                @if(isset($data) && $data['image_path'] != "")
                                    <div class="col-md-1" id="removeImageDiv">
                                        <a href="../../../uploads/gallery/{{$data['image_path']}}" id="" target="_blank">
                                            <img src="../../../uploads/gallery/thumbnails/{{convertImageName($data['image_path'])}}" height="70" width="70" id="" style="width: 100%">
                                        </a>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group row">
                                <div class="col-md-offset-2 col-md-10">
                                    <button class="btn btn-sm btn-primary" id="submitButton" type="submit" tabindex="5">{{isset($data)?'Update':'Save'}}</button>
                                    <a href="{{admin_url($prefix)}}"><button class="btn btn-sm btn-danger ml-5p" tabindex="6" type="button">Cancel</button></a>
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
            $("#form").validate({
                rules:{
                    order: { required: true },
                    type: { required: true },
                    @if(!isset($data))
                    image_path: { required: true },
                    @endif
                },
                messages:{
                    order: {required:"Display Order cannot be empty."},
                    type: {required:"Please select Type."},
                    image_path: {required:"Please select Gallery Image."},
                },
            });
            $(document).on('change', '#type', function (e) {
                if ($(this).val()==='video'){
                    $("#labelUpload").text('Video');
                    $("#image_path").attr('accept',"video/mp4");
                }else{
                    $("#labelUpload").text('Image');
                    $("#image_path").attr('accept',"image/png, image/jpeg");
                }
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
                            url : '{{route("admin.gallery.delete-image")}}',
                            data : {
                                id:$("#id").val(),
                                _token:$("[name=csrf-token]").attr('content')
                            },
                            dataType:"JSON",
                            success : function(data){
                                if(data.result === true){
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
    </script>
@endsection
