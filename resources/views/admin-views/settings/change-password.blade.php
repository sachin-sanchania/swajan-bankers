@extends('admin-views.layouts.app')

@section('title','Change Password')

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
                        <form id="form" name="form" method="POST" class="form-horizontal" action="{{route('admin.settings.updatePassword')}}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-2 control-label"> New Password <span class="text-danger">*</span></label>
                                <div class="col-md-4">
                                    <input type="text" name="new_password" id="new_password" placeholder="Enter New Password Here" class="form-control" tabindex="1" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label"> Re-Enter Password <span class="text-danger">*</span> </label>
                                <div class="col-md-4">
                                    <input type="text" name="re_password" id="re_password" placeholder="Re-Enter New Password Here" class="form-control" tabindex="2" >
                                </div>
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
                    new_password:{
                        required:true,
                    },
                    re_password:{
                        required:true,
                        equalTo:"#new_password"
                    }
                },
                messages:{
                    new_password:{
                        required:"New Password cannot be empty.",
                    },
                    re_password:{
                        required:"Re-Enter Password cannot be empty.",
                        equalTo:"New password and confirm password must be same."
                    }
                },
            });
        });
    </script>
@endsection
