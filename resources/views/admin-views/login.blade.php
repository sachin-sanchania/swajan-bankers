<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel :: SWAJAN</title>
    <link href="{{asset('admin-assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin-assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('admin-assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('admin-assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin-assets/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('admin-assets/css/theme-red.css')}}" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('client/assets/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('client/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('client/favicon/favicon-16x16.png')}}">
    <link rel="mask-icon" href="{{asset('client/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <style type="text/css">
        body{
            background-color: #f4edfd;
            background-image: url("../admin-assets/img/bg.png");
        }
        .headerLogin{
            text-align: center;
            font-weight: 700;
            text-transform: uppercase;
            padding-bottom: 10px;
            color: #a33443;
            font-size: 30px;
            text-shadow: 0px 1px 2px grey;
        }
    </style>

</head>
<body class="gray-bg">
<div class="loginColumns animated fadeInDown">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="ibox-content">
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        {{$message??''}}
                    </div>
                @endif
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        {{$message??''}}
                    </div>
                @endif
                <form class="m-t" role="form" action="#" method="post" name="loginform" id="loginform" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <h1 class="headerLogin"><img src="{{asset('admin-assets/img/logo.svg')}}" height="32px"> SWAJAN</h1>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Username Here" name="username" id="username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Enter Password Here"  name="password" id="password" >
                    </div>


                    <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                    <center style="margin-bottom: 10px"><img src="{{asset('admin-assets/img/loader.gif')}}" class=" image-loader text-center" style="display: none" height="25px" width=""></center>
                    <div id="result"></div>
		    <!--
                    <a href="{{admin_url('forgot-password')}}">
                        <small>Forgot password?</small>
                    </a>-->
                </form>
                <p class="m-t">
                    <small>Copyright @ <?php echo date("Y"); ?>. All Rights Received.</small>
                </p>
            </div>
        </div>
    </div>
</div>
</body>
<script src="{{asset('admin-assets/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('admin-assets/js/plugins/validate/jquery.validate.min.js')}}"></script>
<script src="{{asset('admin-assets/js/CustomLogin.js')}}"></script>
</html>
