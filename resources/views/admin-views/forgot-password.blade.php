<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="{{url('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('admin/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{url('admin/css/animate.css')}}" rel="stylesheet">
    <link href="{{url('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{url('admin/css/custom.css')}}" rel="stylesheet">
    <link href="{{url('admin/css/theme-red.css')}}" rel="stylesheet">
    <style type="text/css">
        body{
            background-color: #f4edfd;
            background-image: url("img/bg.png");
        }
        .headerLogin{
            text-align: center;
            font-weight: 700;
            text-transform: uppercase;
            padding-bottom: 10px;
            color: #D00003;
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
                <form class="m-t" role="form" action="#" method="post" name="forgotform" id="forgotform" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <h1 class="headerLogin">Recover Password</h1>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Enter Your Contact Email Address Here" name="email" id="email">
                    </div>

                    <button type="submit" class="btn btn-primary block full-width m-b">Recover Password</button>
                    <center style="margin-bottom: 10px"><img src="img/loader.gif" class=" image-loader text-center" style="display: none" height="25px" width=""></center>
                    <div id="result"></div>

                    <a href="{{admin_url('login')}}">
                        <small>Back To Login</small>
                    </a>
                </form>
                <p class="m-t">
                    <small>Copyright @ <?php echo date("Y"); ?>. All Rights Received.</small>
                </p>
            </div>
        </div>
    </div>
</div>
</body>
<script src="{{url('admin/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{url('admin/js/plugins/validate/jquery.validate.min.js')}}"></script>
<script src="{{url('admin/js/CustomForgot.js')}}"></script>
</html>
