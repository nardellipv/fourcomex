<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="wide wow-animation">
<head>
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('styleWeb/css/css.css?family=Open+Sans:400,700,400italic,600italic,900')}}">
    <link rel="stylesheet" href="{{ asset('styleWeb/css/style.css')}}">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="https://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
{{--    <script src="{{ asset('styleWeb/js/html5shiv.min.js') }}"></script>--}}
    <![endif]-->
</head>
<body>
<div class="page">
    <header class="page-head">
        <div class="rd-navbar-wrap">
            <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="199px" data-lg-stick-up-offset="199px" class="rd-navbar rd-navbar-corporate rd-navbar-dark">
                <div class="rd-navbar-inner">
                    @include('web.parts._haeder')
                    @include('web.parts._menu')
                </div>
            </nav>
        </div>
    </header>
    <main class="page-content">
        @yield('content')
    </main>
    <footer class="page-foot bg-gray-dark">
        <div class="shell text-center text-sm-left">
            <div class="range range-sm-center">
                <div class="cell-sm-10 cell-md-12">
                    <div class="range range-md-justify">
                        <div class="cell-sm-6 cell-md-3 wrap-lg-justify-vertical">
                            <div class="brand-wrap"><a href="index.html" class="brand"><img src="{{ asset('styleWeb/images/logo.png') }}" alt="" width="250" height="40"/></a></div>
                            <div class="offset-top-30 offset-sm-top-65">
                                <ul class="list-inline list-inline-xs">
                                    <li><a href="#" class="icon icon-xs icon-gray fa-facebook"></a></li>
                                    <li><a href="#" class="icon icon-xs icon-gray fa-twitter"></a></li>
                                    <li><a href="#" class="icon icon-xs icon-gray fa-pinterest-p"></a></li>
                                    <li><a href="#" class="icon icon-xs icon-gray fa-vimeo"></a></li>
                                    <li><a href="#" class="icon icon-xs icon-gray fa-google"></a></li>
                                    <li><a href="#" class="icon icon-xs icon-gray fa-rss"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="cell-sm-6 cell-md-4 offset-top-55 offset-sm-top-0">
                            <div class="max-width-300">
                                <h5 class="h5-variant-1">Newsletter</h5>
                                <hr>
                                <p class="offset-top-22">Inscríbase a nuestros newsletter y manténgase informado.</p>
                                <form data-form-output="form-output-global" data-form-type="subscribe" method="post" action="#" class="rd-mailform rd-mailform-inline rd-mailform-inline-sm offset-top-10">
                                    <div class="form-group">
                                        <label for="footer-subscribe-email" class="form-label">Ingrese su e-mail...</label>
                                        <input id="footer-subscribe-email" type="email" name="email" data-constraints="@Email @Required" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-xs btn-primary btn-no-shadow">Suscribirse</button>
                                </form>
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
                                            <div class="unit-left icon-adjust-vertical"><span class="icon icon-xs icon-white mdi mdi-phone"></span></div>
                                            <div class="unit-body"><span><a href="callto:#">54 11 47 02 86 37</a></span></div>
                                        </div>
                                        <div class="unit unit-xs-horizontal unit-middle unit-spacing-xs offset-top-22 offset-xs-top-18">
                                            <div class="unit-left icon-adjust-vertical"><span class="icon icon-xs icon-white mdi mdi-email-outline"></span></div>
                                            <div class="unit-body"><a href="#a88b" class="link-primary-contrast"><span class="__cf_email__" data-cfemail="ed84838b82ad8988808281848386c3829f8a">info@fourcomex.com</span></a></div>
                                        </div>
                                    </address>
                                </div>
                                <div class="cell-xs-7 cell-sm-6 cell-md-12 cell-lg-6 offset-top-22 offset-xs-top-18 inset-lg-left-9 text-xs-left">
                                    <address class="contact-info contact-info-contrast">
                                        <div class="unit unit-xs-horizontal unit-spacing-xs">
                                            <div class="unit-left icon-adjust-vertical"><span class="icon icon-xs icon-white mdi mdi-map-marker"></span></div>
                                            <div class="unit-body"><a href="#" class="nowrap">Av. Cabildo 3449 10º B <br>
                                                    Buenos Aires, Argentina</a></div>
                                        </div>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="range offset-top-55 offset-sm-top-60 offset-lg-top-88">
                        <div class="cell-xs-12">
                            <p class="rights">&#169;&nbsp;<span id="copyright-year"></span>&nbsp;All Rights Reserved&nbsp;<a href="privacy.html" class="link-gray">Terms of Use and Privacy Policy</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<div id="form-output-global" class="snackbars"></div>
<div tabindex="-1" role="dialog" aria-hidden="true" class="pswp">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button title="Close (Esc)" class="pswp__button pswp__button--close"></button>
                <button title="Share" class="pswp__button pswp__button--share"></button>
                <button title="Toggle fullscreen" class="pswp__button pswp__button--fs"></button>
                <button title="Zoom in/out" class="pswp__button pswp__button--zoom"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button title="Previous (arrow left)" class="pswp__button pswp__button--arrow--left"></button>
            <button title="Next (arrow right)" class="pswp__button pswp__button--arrow--right"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__cent"></div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('styleWeb/js/core.min.js') }}"></script>
<script src="{{ asset('styleWeb/js/script.js') }}"></script>
</body>
<!-- End Google Tag Manager -->
</html>