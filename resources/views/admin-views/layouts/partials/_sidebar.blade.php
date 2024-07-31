<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element text-center">
                        <span>
                        <img alt="image" class="img-circle" style="width: 30%" src="{{asset('admin-assets/img/profile.png')}}" />
                        </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{auth()->user()->name??'Admin'}}</strong>
                         </span> <span class="text-muted text-xs block">Admin <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="{{admin_url('settings/change-password')}}">Change Password</a></li>
                        <li><a href="{{admin_url('logout')}}">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    {{ucfirst(substr((auth()->user()->name??'Admin'),0,1))}}
                </div>
            </li>
            <li class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                <a href="{{url('admin/dashboard')}}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li class="{{ request()->is('admin/testimonial*') ? 'active' : '' }}">
                <a href="{{url('admin/testimonial')}}"><i class="fa fa-quote-left"></i> <span class="nav-label">Testimonial</span></a>
            </li>
            <li class="{{ request()->is('admin/events*') ? 'active' : '' }}">
                <a href="{{url('admin/events')}}"><i class="fa fa-calendar"></i> <span class="nav-label">Events</span></a>
            </li>
            <li class="{{ request()->is('admin/gallery*') ? 'active' : '' }}">
                <a href="{{url('admin/gallery')}}"><i class="fa fa-image"></i> <span class="nav-label">Gallery</span></a>
            </li>
            <li class="{{ request()->is('admin/settings*') ? 'active' : '' }}">
                <a href="{{admin_url('settings')}}"><i class="fa fa-gear"></i> <span class="nav-label">General Settings</span></a>
            </li>
        </ul>

    </div>
</nav>
