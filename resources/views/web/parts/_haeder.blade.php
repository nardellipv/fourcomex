<div class="rd-navbar-middle-panel">
    <div class="rd-navbar-panel">
        <button data-rd-navbar-toggle=".rd-navbar-outer-panel" class="rd-navbar-toggle"><span></span></button>
        <a href="{{ url('/') }}" class="rd-navbar-brand">
            <div class="rd-navbar-fixed--hidden" style="margin-right: -225px;">
                <img src="{{ asset('styleWeb/images/logo.png') }}" alt="fourcomex"
                                                      width="70%"/>
            </div>
        </a>
    </div>
    <div class="rd-navbar-aside">
        <div data-rd-navbar-toggle=".rd-navbar-aside" class="rd-navbar-aside-toggle"><span></span></div>
        <div class="rd-navbar-aside-content">
            <ul class="block-wrap-list">
                <li class="block-wrap">
                    <div class="unit unit-sm-horizontal unit-align-center unit-middle unit-spacing-xxs">
                        <div class="unit-left"><span
                                    class="icon icon-circle-sm icon-sm-variant-1 icon-venice-blue-filled icon-white mdi mdi-map-marker"></span>
                        </div>
                        <div class="unit-body">
                            <address class="contact-info">
                                <a href="#"><span>Av. Cabildo 3449 10º B </span><br>
                                    <span>Buenos Aires, Argentina</span></a>
                            </address>
                        </div>
                    </div>
                </li>
                {{--<li class="block-wrap">
                    <div class="unit unit-sm-horizontal unit-align-center unit-middle unit-spacing-xxs">
                        <div class="unit-left"><span class="icon icon-circle-sm icon-sm-variant-1 icon-venice-blue-filled icon-white fa-envelope-o"></span></div>
                        <div class="unit-body">
                            <address class="contact-info">
                                <span>info@fourcomex.com</span>
                            </address>
                        </div>
                    </div>
                </li>--}}
                <li class="block-wrap">
                    <div class="unit unit-sm-horizontal unit-align-center unit-middle unit-spacing-xxs">
                        <div class="unit-left"><span
                                    class="icon icon-circle-sm icon-sm-variant-1 icon-venice-blue-filled icon-white mdi mdi-phone"></span>
                        </div>
                        <div class="unit-body">
                            <address class="contact-info">
                                <span><a href="callto:#">+54 911 34 35 52 12</a></span>
                            </address>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>