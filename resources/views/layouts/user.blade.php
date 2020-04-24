<!DOCTYPE html>
<html lang="en">

<head>
    @include('inc.user.head')

</head>

<body>
    <a href="https://api.whatsapp.com/send?phone=919962151204&text=Send%21%20Message" class="float" target="_blank">
        <i class="fab fa-whatsapp my-float"></i></a>
        
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
