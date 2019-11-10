<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect"><i class="mdi mdi-airplay"></i> <span> Dashboard </span>
                    </a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-newspaper"></i> <span> News</span>
                        <i class="mdi mdi-chevron-right"></i></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('list.news') }}">Listado</a></li>
                        <li><a href="{{ route('add.news') }}">Agregar</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-barcode"></i> <span> Categorias y Productos</span>
                        <i class="mdi mdi-chevron-right"></i></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('list.category') }}">Listado Categorias</a></li>
                        <li><a href="{{ route('add.category') }}">Agregar Categoría</a></li>
                        <li><a href="{{ route('list.product') }}">Listado Productos</a></li>
                        <li><a href="{{ route('add.product') }}">Agregar Productos</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-cursor-text"></i> <span> Secciones Sitio web</span>
                        <i class="mdi mdi-chevron-right"></i></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('slider.view') }}">Slider</a></li>
                        <li><a href="{{ route('view.about') }}">Sobre Nosotros</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account"></i> <span> Usuarios</span>
                        <i class="mdi mdi-chevron-right"></i></a>
                    <ul class="list-unstyled">
                        <li><a href="ui-buttons.html">Listado</a></li>
                        <li><a href="ui-buttons.html">Agregar</a></li>
                    </ul>
                </li>
                <li>
                    <a href="index.html" class="waves-effect"><i class="mdi mdi-exit-to-app"></i> <span> Salir </span>
                    </a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
    </div>
</div>