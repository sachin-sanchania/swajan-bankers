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
                    <li><a href="{{admin_url('settings/change-password')}}">Change Password</a></li>
                    <li><a href="{{admin_url('logout')}}">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
