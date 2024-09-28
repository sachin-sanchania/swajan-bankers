@extends('admin-views.layouts.app')

@section('title','Settings')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2 class="col-sm-9">{{ucwords($prefix)}}</h2>
            <ol class="breadcrumb pull-right" style="padding-top:2.5%">
                <li class="active">
                    <strong>{{ucwords($prefix)}}</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content">

        @include('admin-views.layouts.partials._alerts')

        <div class="row">
            <div class="col-md-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5> {{ucwords($prefix)}}</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form id="form" name="form" method="POST" class="form-horizontal" action="{{route('admin.settings.update')}}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right"> Facebook URL </label>
                                <div class="col-md-10">
                                    <input type="text" name="facebook_url" id="facebook_url" placeholder="Enter Facebook URL Here (Leave Blank If Do not need to show on website.)" class="form-control" value="{{$data['facebook_url']??''}}" tabindex="1" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right"> YouTube URL </label>
                                <div class="col-md-10">
                                    <input type="text" name="youtube_url" id="youtube_url" placeholder="Enter YouTube URL Here (Leave Blank If Do not need to show on website.)" class="form-control" value="{{$data['youtube_url']??''}}" tabindex="2" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right"> Twitter URL </label>
                                <div class="col-md-10">
                                    <input type="text" name="twitter_url" id="twitter_url" placeholder="Enter Twitter URL Here (Leave Blank If Do not need to show on website.)" class="form-control" value="{{$data['twitter_url']??''}}" tabindex="3" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right"> Instagram URL </label>
                                <div class="col-md-10">
                                    <input type="text" name="instagram_url" id="instagram_url" placeholder="Enter Instagram URL Here (Leave Blank If Do not need to show on website.)" class="form-control" value="{{$data['instagram_url']??''}}" tabindex="4" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right"> Contact No. <span class="text-danger">*</span> </label>
                                <div class="col-md-4">
                                    <textarea name="contact_no" id="contact_no" placeholder="Enter Contact No. Here For eg. +91 123456789" class="form-control" tabindex="5" >{{($data['contact_no'])??''}}</textarea>
                                </div>
                                <label class="col-md-2 col-form-label text-right"> Contact Email <span class="text-danger">*</span></label>
                                <div class="col-md-4">
                                    <input type="text" name="contact_email" id="contact_email" placeholder="Enter Contact Email Here" class="form-control" value="{{$data['contact_email']??''}}" tabindex="6" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right"> Contact Address <span class="text-danger">*</span> </label>
                                <div class="col-md-4">
                                    <textarea name="contact_address" id="contact_address" placeholder="Enter Address Here" class="form-control" tabindex="7" >{{$data['contact_address']??''}}</textarea>
                                </div>
                                <label class="col-md-2 col-form-label text-right"> Brochure <span class="text-danger">*</span></label>
                                <div class="col-md-3">
                                    <input type="file" name="brochure_path" id="brochure_path" class="form-control" accept = "application/pdf,.csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" tabindex="8">
                                </div>
                                @if(isset($data) && !empty($data['brochure_path']))
                                    <div class="col-md-1">
                                        <a href="../../../uploads/brochure/{{$data['brochure_path']}}" target="_blank" class="btn btn-primary">
                                            <i class="fa fa-download"></i>
                                        </a>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group row">

                            </div>
                            <div class="form-group row">
                                <div class="col-lg-offset-2 col-md-10">
                                    <button class="btn btn-sm btn-primary" id="submitButton" type="submit" tabindex="10">{{isset($data)?'Update':'Save'}}</button>
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
                    contact_no:{
                        required:true,
                    },
                    contact_email:{
                        required:true,
                        email:true
                    }
                },
                messages:{
                    contact_no:{
                        required:"Contact No. cannot be empty."
                    },
                    contact_email:{
                        required:"Contact Email cannot be empty.",
                        email:"Please enter valid email address. Eg. abc@xyz.com"
                    }
                },
            });
        });
    </script>
@endsection
