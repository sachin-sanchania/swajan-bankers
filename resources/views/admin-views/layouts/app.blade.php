<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Favicon Start -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('client/assets/favicon_new/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('client/assets/favicon_new/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('client/assets/favicon_new/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('client/assets/favicon_new/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('client/assets/favicon_new/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('client/assets/favicon_new/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('client/assets/favicon_new/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('client/assets/favicon_new/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('client/assets/favicon_new/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('client/assets/favicon_new/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('client/assets/favicon_new/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('client/assets/favicon_new/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('client/assets/favicon_new/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('client/assets/favicon_new/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('client/assets/favicon_new/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">

    <link href="{{asset('admin-assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin-assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('admin-assets/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin-assets/css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin-assets/css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('admin-assets/css/plugins/select2/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin-assets/css/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet">
    <link href="{{asset('admin-assets/css/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin-assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('admin-assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin-assets/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('admin-assets/css/theme-red.css')}}" rel="stylesheet">
    <script src="{{asset('admin-assets/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('admin-assets/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/plugins/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/plugins/datapicker/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('admin-assets/js/plugins/validate/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/plugins/dataTables/datatables.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/plugins/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/inspinia.js')}}"></script>
    <script src="{{asset('admin-assets/js/plugins/pace/pace.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/plugins/toastr/toastr.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/custom.js')}}"></script>

    @stack('css_or_js')

</head>

<body class="">
    @include('admin-views.layouts.partials._sidebar')

    <div id="page-wrapper" class="gray-bg">
        @include('admin-views.layouts.partials._header')

        @yield('content')

        @include('admin-views.layouts.partials._footer')
    </div>

    <script type="text/javascript">
        toastr.options = {
            closeButton: true,
            progressBar: true,
            timeOut: 2000
        };
    </script>

    @stack('script')

</body>

</html>
