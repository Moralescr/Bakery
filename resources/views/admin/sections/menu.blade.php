<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('dashboard')}}">
                    <i class="feather icon-heart"></i>
                    <h2 class="brand-text mb-0">Ale's Cake</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="{{route('dashboard')}}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Panel</span><span class="badge badge badge-warning badge-pill float-right mr-2">2</span></a>
                <ul class="menu-content">
                    <li class="active"><a href="{{ route('dashboard') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">Administración</span></a>
                    </li>
                </ul>
            </li>
            <li class="navigation-header"><span>Blog</span>
            </li>
            <li class=" nav-item"><a href="{{route('products.index')}}"><i class="feather icon-mail"></i><span class="menu-title" data-i18n="Email">Publicaciones</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('categories.index')}}"><i class="feather icon-file"></i><span class="menu-title" data-i18n="Email">Categories</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('tags.index')}}"><i class="feather icon-bookmark"></i><span class="menu-title" data-i18n="Email">Etiquetas</span></a>
            </li>
            <li class=" navigation-header"><span>Fotografías</span>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-list"></i><span class="menu-title" data-i18n="Data List">Subir fotos</span>
               <span class="badge badge badge-success badge-pill float-right mr-2">Nuevo</span></a>
            </li>
            <li class=" navigation-header"><span>Soporte</a></span><span class="badge badge badge-danger badge-pill float-right mr-2">En proceso</span>
            </li>
            <li class=" nav-item"><a href=""#><i class="feather icon-folder"></i><span class="menu-title" data-i18n="Documentation">Documentación</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-settings"></i><span class="menu-title" data-i18n="Raise Support">Configuración</span></a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->