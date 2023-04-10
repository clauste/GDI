<a id="toggle-sidebar" class="btn-lg position-fixed rounded-circle noshow" href="#">
    <i class="fa fa-bars"></i>
</a>
<nav id="sidebar" class="sidebar-wrapper navshow">
    <div id="dragable" class="sidebar-content">
        <!-- sidebar-brand  -->
        <div class="sidebar-item sidebar-brand">
            <a href="#" style="color:white;"> GDI </a>
        </div>
        <div class=" sidebar-item sidebar-menu">
            <ul>
                <li class="header-menu">
                    <span>General</span>
                </li>
                <li class="">
                    <a href="{{ route('dashboard') }}">
                        <i class="fa fa-tachometer-alt"></i>
                        <span class="menu-text">Beranda</span>
                    </a>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="fa fa-camera"></i>
                        <span class="menu-text">Managment</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="{{ route('picture.index') }}">Picture</a>
                            </li>
                            <li>
                                <a href="{{ route('flickr') }}">Flickr</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="header-menu">
                    <span>Master Data</span>
                </li>
                <li class="">
                    <a href="{{ route('user.index') }}">
                        <i class="fa fa-user"></i>
                        <span class="menu-text">user</span>
                    </a>
                </li>
                
            </ul>
        </div>
        <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-footer  -->
    <div class="sidebar-footer">
        <div>
            <a href="" data-toggle="tooltip" data-placement="top" title="Keluar" 
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                <i class="fa fa-power-off"></i>
            </a>
            <form id="logout-form" action="{{ route('signout') }}" method="GET" style="display: none;">
                @csrf
            </form>
        </div>
        <div class="pinned-footer">
            <a href="#">
                <i class="fas fa-ellipsis-h"></i>
            </a>
        </div>
    </div>
</nav>