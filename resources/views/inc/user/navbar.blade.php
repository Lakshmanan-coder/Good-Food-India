<header class=" @yield("header_type") clearfix ">
{{-- <header class="header_in clearfix element_to_stick"> --}}
    <div class="container">
    <div id="logo">
        <a href="/">
            <img src="/img/logo.svg" width="140" height="35" alt="" class="logo_normal">
            <img src="/img/logo_sticky.svg" width="140" height="35" alt="" class="logo_sticky">
        </a>
    </div>
    @guest
    <ul id="top_menu">
        <li><a href="#sign-in-dialog" id="sign-in" class="login">Sign In</a></li>
    </ul>

    @else
    <ul id="top_menu">
        <li><a href="{{ route('logout') }}" id="sign-in" class="login" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Sign In</a></li>
    </ul>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

    @endguest
    <!-- /top_menu -->
    <a href="#0" class="open_close">
        <i class="icon_menu"></i><span>Menu</span>
    </a>
    <nav class="main-menu">
        <div id="header_menu">
            <a href="#0" class="open_close">
                <i class="icon_close"></i><span>Menu</span>
            </a>
            <a href="/"><img src="/img/logo.svg" width="140" height="35" alt=""></a>
        </div>
        <ul>
            <li class="submenu">
                <a href="/" class="show-submenu">Home</a>
            
            </li>
            <li class="submenu">
                <a href="/plans" class="show-submenu">Plan</a>
        
            </li>
            @auth
            <li class="submenu">
                <a href="/profile" class="show-submenu">Profile</a>
            
            </li>
            {{-- <li><a href="/wallet">Wallet</a></li> --}}
            <li><a href="/calender">Calendar</a></li>
            @endauth
        </ul>
    </nav>
</div>
</header>