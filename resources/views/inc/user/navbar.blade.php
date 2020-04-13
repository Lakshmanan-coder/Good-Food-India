<header class=" @yield("header_type") clearfix ">
{{-- <header class="header_in clearfix element_to_stick"> --}}
    <div class="container">
    <div id="logo">
        <a href="/">
            {{-- <img src="/img/logo.svg" width="140" height="35" alt="" class="logo_normal">
            <img src="/img/logo_sticky.svg" width="140" height="35" alt="" class="logo_sticky"> --}}
            <img src="assets/images/logo.png" width="140" height="" alt="" class="logo_normal pos-normal">
				<img src="assets/images/logo2.png" width="140" height="" alt="" class="logo_sticky pos-absolute">
        </a>
    </div>
    @guest
    {{-- <ul id="top_menu">
        <li><a href="#sign-in-dialog" id="sign-in" class="login">Sign In</a></li>
    </ul> --}}

    @else
    {{-- <ul id="top_menu">
        <li><a href="{{ route('logout') }}" id="sign-in" class="login" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Sign In</a></li>
    </ul> --}}
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
            <li class="submenu">
                <a href="/#how-we-work" class="show-submenu">How we work</a>
        
            </li>
            <li class="submenu">
                <a href="/#offers" class="show-submenu">Offers</a>
        
            </li>
            <li class="submenu">
                <a href="/#contact-us" class="show-submenu">Contact Us</a>
        
            </li>
         @auth
            
         <li class="submenu">
            <a href="#0" class="show-submenu"><span class="fa fa-user-circle"></span>   {{Auth::user()->name}}</a>
            <ul>
                <li><a href="/profile">My Profile</a></li>
                <li><a href="/calender">My Calender</a></li>
                <li><a href="/logout"  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" >Logout</a></li>
               
            </ul>
        </li>

         @else
         <li class="submenu">
            <a  href="/login" class="btn_1  btn-color-custom-sub text-white" style="color:#fff;">Login / Sign Up</a>
        </li>
         @endauth
        </ul>
    </nav>
</div>
</header>