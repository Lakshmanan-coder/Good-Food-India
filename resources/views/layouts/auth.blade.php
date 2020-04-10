<!doctype html>
<html lang="en">
    <head>
        @include('inc.admin.head')

    </head>


    <body>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">
            <div class="card card-pages">

                <div class="card-body">
                    <div class="text-center m-t-0 m-b-15">
                            <a href="/" class="logo logo-admin"><img src="/assets/images/logo-dark.png" alt="" height="70"></a>
                    </div>
                    <h4 class="text-muted text-center m-t-0"><b>@yield('pagetitle')</b></h4>

                    @yield('content')
                        
                </div>

            </div>
        </div>



        <!-- jQuery  -->
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/js/modernizr.min.js"></script>
        <script src="/assets/js/detect.js"></script>
        <script src="/assets/js/fastclick.js"></script>
        <script src="/assets/js/jquery.slimscroll.js"></script>
        <script src="/assets/js/jquery.blockUI.js"></script>
        <script src="/assets/js/waves.js"></script>
        <script src="/assets/js/wow.min.js"></script>
        <script src="/assets/js/jquery.nicescroll.js"></script>
        <script src="/assets/js/jquery.scrollTo.min.js"></script>

        <script src="/assets/js/app.js"></script>

    </body>
</html>