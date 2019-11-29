<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="wide wow-animation">
<head>
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('styleWeb/css/css.css?family=Open+Sans:400,700,400italic,600italic,900')}}">
    <link rel="stylesheet" href="{{ asset('styleWeb/css/style.css')}}">

    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
</head>
<body>
<div class="page">
    <header class="page-head">
        <div class="rd-navbar-wrap">
            <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
                 data-md-layout="rd-navbar-static" data-lg-layout="rd-navbar-static"
                 data-lg-device-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="199px"
                 data-lg-stick-up-offset="199px" class="rd-navbar rd-navbar-corporate rd-navbar-dark">
                <div class="rd-navbar-inner">
                    @include('web.parts._haeder')
                    @include('web.parts._menu')
                </div>
            </nav>
        </div>
    </header>

    <main class="page-content">
        {!! Toastr::message() !!}
        @yield('content')
    </main>
    <footer class="page-foot bg-gray-dark">
        <div class="shell text-center text-sm-left">
            <div class="range range-sm-center">
                <div class="cell-sm-10 cell-md-12">
                    <div class="range range-md-justify">
                        <div class="cell-sm-6 cell-md-3 wrap-lg-justify-vertical">
                            <div class="brand-wrap"><a href="{{ url('/') }}l" class="brand"><img
                                            src="{{ asset('styleWeb/images/logo.png') }}" alt="" width="250"
                                            height="40"/></a></div>
                            <div class="offset-top-30 offset-sm-top-65">
                                <ul class="list-inline list-inline-xs">
                                    <li><a href="https://instagram.com/fourcomexsrl?igshid=39qhpre27iad"
                                           class="icon icon-xs icon-gray fa-instagram" target="_blank"></a></li>
                                    <li><a href="https://www.linkedin.com/company/fourcomex-srl/"
                                           class="icon icon-xs icon-gray fa-linkedin" target="_blank"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="cell-md-4 cell-lg-5 offset-top-55 offset-md-top-0">
                            <div class="range">
                                <div class="cell-xs-12">
                                    <h5 class="h5-variant-1">Contacto</h5>
                                    <hr>
                                </div>
                                <div class="cell-xs-5 cell-sm-6 cell-md-12 cell-lg-6 offset-top-18 text-xs-left">
                                    <address class="contact-info contact-info-contrast">
                                        <div class="unit unit-xs-horizontal unit-spacing-xs">
                                            <div class="unit-left icon-adjust-vertical"><span
                                                        class="icon icon-xs icon-white mdi mdi-phone"></span></div>
                                            <div class="unit-body"><span><a href="callto:#">54 11 47 02 86 37</a></span>
                                            </div>
                                        </div>
                                        <div class="unit unit-xs-horizontal unit-middle unit-spacing-xs offset-top-22 offset-xs-top-18">
                                            <div class="unit-left icon-adjust-vertical"><span
                                                        class="icon icon-xs icon-white mdi mdi-email-outline"></span>
                                            </div>
                                            <div class="unit-body"><a href="#a88b" class="link-primary-contrast"><span
                                                            class="__cf_email__"
                                                            data-cfemail="ed84838b82ad8988808281848386c3829f8a">info@fourcomex.com</span></a>
                                            </div>
                                        </div>
                                    </address>
                                </div>
                                <div class="cell-xs-7 cell-sm-6 cell-md-12 cell-lg-6 offset-top-22 offset-xs-top-18 inset-lg-left-9 text-xs-left">
                                    <address class="contact-info contact-info-contrast">
                                        <div class="unit unit-xs-horizontal unit-spacing-xs">
                                            <div class="unit-left icon-adjust-vertical"><span
                                                        class="icon icon-xs icon-white mdi mdi-map-marker"></span></div>
                                            <div class="unit-body"><a href="#" class="nowrap">Av. Cabildo 3449 10º B
                                                    <br>
                                                    Buenos Aires, Argentina</a></div>
                                        </div>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="range offset-top-55 offset-sm-top-60 offset-lg-top-88">
                        <div class="cell-xs-12">
                            <p class="rights">&#169;&nbsp;<span id="copyright-year"></span>&nbsp;designed by MikAnt </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="{{ asset('styleWeb/js/core.min.js') }}"></script>
<script src="{{ asset('styleWeb/js/script.js') }}"></script>
</body>
<!-- End Google Tag Manager -->
</html>