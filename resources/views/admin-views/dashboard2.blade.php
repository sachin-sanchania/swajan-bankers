<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="{{url('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('admin/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{url('admin/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
    <link href="{{url('admin/css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
    <link href="{{url('admin/css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">
    <link href="{{url('admin/css/plugins/select2/select2.min.css')}}" rel="stylesheet">
    <link href="{{url('admin/css/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{url('admin/css/animate.css')}}" rel="stylesheet">
    <link href="{{url('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{url('admin/css/custom.css')}}" rel="stylesheet">
</head>
<body class="">
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element text-center">
                        <span>
                        <img alt="image" class="img-circle" style="width: 30%" src="{{url('admin/img/profile.png')}}" />
                        </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{auth()->user()->name}}</strong>
                         </span> <span class="text-muted text-xs block">Admin <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile">Profile</a></li>
                            <li><a href="changePassword">Change Password</a></li>
                            <li><a href="../logout">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        {{substr(auth()->user()->name,0,1)}}
                    </div>
                </li>
                <li class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{url('admin/dashboard')}}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
                </li>
                <li class="">
                    <a href="products"><i class="fa fa-product-hunt"></i> <span class="nav-label">Products</span></a>
                </li>
                <li class="">
                    <a href="javascript:;"><i class="fa fa-university"></i> <span class="nav-label">Master Records </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse" style="height: 0px;">
                        <li class=""><a href="category"><i class="fa fa-circle-o"></i>Category</a></li>
                        <li class=""><a href="sub-category"><i class="fa fa-circle-o"></i>Sub Category</a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="settings"><i class="fa fa-gear"></i> <span class="nav-label">General Settings</span></a>
                </li>
            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                </div>
                <ul class="nav navbar-top-links navbar-right ">
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-user"></i> My Account  <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile">Profile</a></li>
                            <li><a href="changePassword">Change Password</a></li>
                            <li><a href="logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-12">
                <h2 class="col-sm-9">Dashboard</h2>
                <ol class="breadcrumb pull-right" style="padding-top:2.5%">
                    <li class="active">
                        <strong>Dashboard</strong>
                    </li>
                </ol>
            </div>
        </div>

        <div class="wrapper wrapper-content">
            <div class="middle-box text-center animated fadeInRightBig">
                <h3 class="font-bold">WELCOME TO FLIZAWARE</h3>

            </div>
        </div>
        <div class="footer">
            <div>
                <strong>Copyright</strong> &copy; <?php echo date("Y"); ?>. All Rights Reserved.
            </div>
        </div>
        <!-- Mainly scripts -->

        <script type="text/javascript">
            toastr.options = {
                closeButton: true,
                progressBar: true,
                timeOut: 2000
            };
        </script>
    </div>
</div>
</body>
</html>
