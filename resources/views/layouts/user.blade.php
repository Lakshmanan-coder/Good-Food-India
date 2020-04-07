<!DOCTYPE html>
<html lang="en">

<head>
    @include('inc.user.head')

</head>

<body>

    <!-- HEADER -->
    @include('inc.user.navbar')
    @include('inc.messages')
    @yield('content')

    @include('inc.user.footer')
    <!--/footer-->


    @include('inc.user.signinform')

    @include('inc.user.scripts')
</body>

</html>
