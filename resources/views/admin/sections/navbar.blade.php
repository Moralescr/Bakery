    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto">
                          <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                             <i class="ficon feather icon-menu"></i>
                          </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav bookmark-icons">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon feather icon-message-square"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="Mensajes"><i class="ficon feather icon-heart"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon feather icon-star warning"></i></a>
                            <div class="bookmark-input search-input">
                                <div class="bookmark-input-icon"><i class="feather icon-search primary"></i></div>
                                <input class="form-control input" type="text" placeholder="Buscar..." tabindex="0" data-search="template-list">
                                <ul class="search-list search-list-bookmark"></ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <!--<i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>-->
                        <i class="flag-icon flag-icon-es"></i><span class="selected-language">Español</span></a>
                        <!--<div class="dropdown-menu" aria-labelledby="dropdown-flag">
                           <a class="dropdown-item" href="#" ><i class="flag-icon flag-icon-us"></i> English</a> 
                           <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Español</a> 
                        </div>-->
                    </li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon feather icon-search"></i></a>
                        <div class="search-input">
                            <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                            <input class="input" type="text" placeholder="Buscar..." tabindex="-1" data-search="template-list">
                            <div class="search-input-close"><i class="feather icon-x"></i></div>
                            <ul class="search-list search-list-main"></ul>
                        </div>
                    </li>
                    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-mail"></i><span style="background-color:#d62350"  class="badge badge-pill  badge-up cart-item-count">1</span></a>
                
                    </li>
                    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span style="background-color:#d62350"  class="badge badge-pill  badge-up">2</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <div class="dropdown-header m-0 p-2">
                                    <h3 class="white">2 nuevas</h3><span class="notification-title">Mis Notificaciones</span>
                                </div>
                            </li>
                            <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="javascript:void(0)">
                                    <div class="media d-flex align-items-start">
                                        <div class="media-left"><i class="feather icon-plus-square font-medium-5 primary"></i></div>
                                        <div class="media-body">
                                            <h6 class="primary media-heading">Nueva visita a la página!</h6><small class="notification-text"> País: Estados Unidos</small>
                                        </div><small>
                                            <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hours ago</time></small>
                                    </div>
                                </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                    <div class="media d-flex align-items-start">
                                        <div class="media-left"><i class="feather icon-download-cloud font-medium-5 success"></i></div>
                                        <div class="media-body">
                                            <h6 class="success media-heading red darken-1">Nuevo inicio de sesión</h6><small class="notification-text">Ubicación: Nicoya, Costa Rica.</small>
                                        </div><small>
                                            <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 hour ago</time></small>
                                    </div>
                                </a></li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="javascript:void(0)">Ver todas las notificaciones</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                           <div class="user-nav d-sm-flex d-none">
                                <span class="user-name text-bold-600"> {{ Auth::user()->name }} <span class="caret"></span></span>
                               
                                <span class="user-status fa fa-circle text-success"> En línea</span>
                            </div>
                            @if(Auth::user()->file)
                               <span><img class="round" src="{{ asset(Auth::user()->file) }}" alt="avatar" height="40" width="40"></span>
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                         <a class="dropdown-item" href="#"><i class="feather icon-user"></i> Editar Perfil</a>
                         <!--<a class="dropdown-item" href="#"><i class="feather icon-mail"></i> My Inbox</a>
                         <a class="dropdown-item" href="#"><i class="feather icon-check-square"></i> Task</a>
                         <a class="dropdown-item" href="#"><i class="feather icon-message-square"></i> Chats</a> -->
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="feather icon-power"></i> 
                            Logout
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->