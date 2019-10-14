<div class="rd-navbar-outer-panel">
    <div class="rd-navbar-nav-wrap">
        <ul class="rd-navbar-nav">
            <li class="active"><a href="{{ route('home') }}">Inicio</a></li>
            <li><a href="#">GLP</a>
                <ul class="rd-navbar-dropdown">
                    @foreach($categories as $category)
                        @if($category->provider_id == 1)
                            <li><a href="{{ route('provider.index', [$category->provider_id, $category->slug]) }}">{{ $category->name }}</a></li>
                        @endif
                    @endforeach
                </ul>
            </li>
            <li><a href="#">Gases Industriales</a>
                <ul class="rd-navbar-dropdown">
                    @foreach($categories as $category)
                        @if($category->provider_id == 2)
                            <li><a href="{{ route('provider.index', [$category->provider_id, $category->slug]) }}">{{ $category->name }}</a></li>
                        @endif
                    @endforeach
                </ul>
            </li>
            <li><a href="#">Mezcladoras</a>
                <ul class="rd-navbar-dropdown">
                    @foreach($categories as $category)
                        @if($category->provider_id == 3)
                            <li><a href="{{ route('provider.index', [$category->provider_id, $category->slug]) }}">{{ $category->name }}</a></li>
                        @endif
                    @endforeach
                </ul>
            </li>

            {{--<li><a href="#">GLP</a>
                <ul class="rd-navbar-dropdown">
                    <li><a href="buttons.html">ALGAS</a></li>
                    <li><a href="buttons.html">Blackmer</a></li>
                    <li><a href="buttons.html">EGSA</a></li>
                    <li><a href="buttons.html">Hannay Reels</a></li>
                    <li><a href="buttons.html">MEC Marshal Excelsior</a></li>
                    <li><a href="buttons.html">MGA</a></li>
                    <li><a href="buttons.html">Rochester</a></li>
                    <li><a href="buttons.html">Red Seal</a></li>
                    <li><a href="buttons.html">WAC</a></li>
                </ul>
            </li>
            <li><a href="#">GASES INDUSTRIALES</a>
                <ul class="rd-navbar-dropdown">
                    <li><a href="buttons.html">Blackmer</a></li>
                    <li><a href="buttons.html">Chester Valve</a></li>
                    <li><a href="buttons.html">Cryo Diffusion</a></li>
                    <li><a href="buttons.html">EGSA</a></li>
                    <li><a href="buttons.html">EC Marshal Excelsior</a></li>
                    <li><a href="buttons.html">Metal Impact</a></li>
                    <li><a href="buttons.html">MGA</a></li>
                    <li><a href="buttons.html">RegO</a></li>
                    <li><a href="buttons.html">WAC</a></li>
                </ul>
            </li>
            <li><a href="#">MEZCLADORAS</a>
                <ul class="rd-navbar-dropdown">
                    <li><a href="buttons.html">IKA</a></li>
                </ul>
            </li>--}}
            <li><a href="#">NEWS</a>
                <ul class="rd-navbar-dropdown">
                    <li><a href="{{ route('blog.index') }}">Información Técnica</a></li>
                </ul>
            </li>
            <li><a href="{{ url('/sobre-nosotros') }}">SOBRE NOSOTROS</a></li>
            <li><a href="{{ url('/contacto') }}">CONTACTO</a></li>
        </ul>
        {{--<div class="rd-navbar-search">
            <form action="search-results.html" method="GET" data-search-live="rd-search-results-live" class="rd-search">
                <div class="form-group">
                    <label for="rd-search-form-input" class="form-label">Search...</label>
                    <input id="rd-search-form-input" type="text" name="s" autocomplete="off" class="form-control">
                    <div id="rd-search-results-live" class="rd-search-results-live"></div>
                    <button type="submit" class="rd-navbar-search-submit"></button>
                </div>
            </form>
            <button data-rd-navbar-toggle=".rd-navbar-search" class="rd-navbar-search-toggle"></button>
        </div>--}}
    </div>
</div>