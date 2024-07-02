
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EventCon</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('layouts_frontend.styles')
    
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    @include('layouts_frontend.header')
    <!-- header-end -->

    @yield('content')
    
    <!-- footer_start  -->
    @include('layouts_frontend.footer')
    <!-- footer_end  -->

    <!-- JS here -->
    @include('layouts_frontend.scripts')
    
</body>

</html>