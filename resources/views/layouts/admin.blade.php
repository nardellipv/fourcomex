<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tildi - Responsive Admin Template">
    <meta name="author" content="Agahelp">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <title>FourComex | Admin</title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{asset('styleAdmin/assets/plugins/morris/morris.css') }}">
    <!-- App css -->
    <link href="{{asset('styleAdmin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('styleAdmin/assets/css/icons.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('styleAdmin/assets/css/style.css') }}" rel="stylesheet" type="text/css"/>

    @yield('style')

    <script src="{{asset('styleAdmin/assets/js/modernizr.min.js') }}"></script>

    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

</head>

<body class="fixed-left">
<!-- Begin page -->
<div id="wrapper">
    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- LOGO -->
        <div class="topbar-left">
            <a href="index.html" class="logo">
                <img class="flgo" src="{{ asset('styleWeb/images/logo.png') }}" width="50%">
                {{--<img class="slgo" src="{{asset('styleAdmin/assets/images/slogo.png') }}" alt="TILDI">--}}
            </a>
        </div>
        <!-- Button mobile view to collapse sidebar menu -->
        @include('admin.parts._header')
    </div>
    <!-- Top Bar End -->
    <!-- ========== Left Sidebar Start ========== -->
@include('admin.parts._menu')
<!-- Left Sidebar End -->
{!! Toastr::message() !!}

<!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">

            @yield('content')
        </div> <!-- content -->

        <footer class="footer text-right">
            {{ date('Y') }} © Fourcomex.com
        </footer>

    </div>

</div>
<!-- END wrapper -->


<!-- jQuery  -->
<script src="{{asset('styleAdmin/assets/js/jquery.min.js') }}"></script>
<script src="{{asset('styleAdmin/assets/js/popper.min.js') }}"></script>
<script src="{{asset('styleAdmin/assets/js/bootstrap.min.js') }}"></script>
<script src="{{asset('styleAdmin/assets/js/detect.js') }}"></script>
<script src="{{asset('styleAdmin/assets/js/fastclick.js') }}"></script>
<script src="{{asset('styleAdmin/assets/js/jquery.blockUI.js') }}"></script>
<script src="{{asset('styleAdmin/assets/js/waves.js') }}"></script>
<script src="{{asset('styleAdmin/assets/js/jquery.nicescroll.js') }}"></script>
<script src="{{asset('styleAdmin/assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{asset('styleAdmin/assets/js/jquery.scrollTo.min.js') }}"></script>

<!--Morris Chart-->
<script src="{{asset('styleAdmin/assets/plugins/morris/morris.min.js') }}"></script>
<script src="{{asset('styleAdmin/assets/plugins/raphael/raphael-min.js') }}"></script>

@yield('script')

<!-- App js -->
<script src="{{asset('styleAdmin/assets/js/jquery.core.js') }}"></script>
<script src="{{asset('styleAdmin/assets/js/jquery.app.js') }}"></script>

</body>
</html>
