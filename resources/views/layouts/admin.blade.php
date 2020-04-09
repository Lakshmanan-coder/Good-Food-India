<!doctype html>
<html lang="en">

<head>
@include('inc.admin.head')
</head>

<body class="fixed-left">
@include('inc.messages')
    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="/admin" class="logo"><img src="/assets/images/logo-dark.png" alt="" height="24"></a>
                    <a href="/admin" class="logo-sm"><img src="/assets/images/logo-sm.png" alt="" height="28"></a>
                </div>
            </div>
            <!-- Button mobile view to collapse sidebar menu -->

            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                        {{-- <li class="hide-phone app-search float-left">
                            <form role="search" class="navbar-form">
                                <input type="text" placeholder="Search..." class="form-control search-bar">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li> --}}
                    </ul>

                    <ul class="nav navbar-right float-right list-inline">
                        {{-- <li class="dropdown d-none d-sm-block">
                            <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light notification-icon-box" data-toggle="dropdown" aria-expanded="true">
                                <i class="fa fa-bell"></i> <span class="badge badge-xs badge-danger"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-lg">
                                <li class="text-center notifi-title">Notification <span class="badge badge-xs badge-success">3</span></li>
                                <li class="list-group">
                                        <a href="javascript:void(0);" class="dropdown-item notify-item mt-2">
                                                <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                                <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                            </a>
                                            <!-- item-->
                                          
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                                                <p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span></p>
                                            </a>
                                            
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item mb-2">
                                                <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                                <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                                            </a>
        
                                    <!-- last list item -->
                                    <a href="javascript:void(0);" class="list-group-item text-center">
                                        <small class="text-primary mb-0">View all </small>
                                    </a>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="d-none d-sm-block">
                            <a href="#" id="btn-fullscreen" class="waves-effect waves-light notification-icon-box"><i class="fas fa-expand"></i></a>
                        </li>

                        <li class="dropdown">
                            <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                <img src="/assets/images/users/avatar-1.jpg" alt="user-img" class="rounded-circle">
                                <span class="profile-username">
                                        {{Auth::user()->name}} <span class="mdi mdi-chevron-down font-15"></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="/logout" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" class="dropdown-item"> Logout</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->

        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">

                <div class="user-details">
                    <div class="text-center">
                        <img src="/assets/images/users/avatar-1.jpg" alt="" class="rounded-circle img-thumbnail">
                    </div>
                    <div class="user-info">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{Auth::user()->name}}</a>
                            <ul class="dropdown-menu" >
                                <li><a href="javascript:void(0)" class="dropdown-item" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"> Logout</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!--- Divider -->

                <div id="sidebar-menu">
                    @include('inc.admin.sidebar')
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- end sidebarinner -->
        </div>
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->

        <div class="content-page">
            <!-- Start content -->
            @yield('content')

        </div> <!-- Page content Wrapper -->

        </div>
        <!-- content -->

        <footer class="footer">
            ©2020 Good Indian Food <span class="d-none d-md-inline-block"> - Designed by Nyx Wolves</span>
        </footer>

    </div>
    <!-- End Right content here -->

    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
@include('inc.admin.scripts')
</body>

</html>