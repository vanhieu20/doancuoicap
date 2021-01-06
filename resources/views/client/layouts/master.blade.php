<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Manup Template">
    <meta name="keywords" content="Manup, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HỌC NHANH</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">


    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('themes/clients/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('themes/clients/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('themes/clients/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('themes/clients/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('themes/clients/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('themes/clients/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('themes/clients/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('themes/clients/css/style1.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    @include('client.layouts.header')
    <!-- Header End -->

    @yield('content')

    <!-- Footer Section Begin -->
    @include('client.layouts.footer')
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('themes/clients/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('themes/clients/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('themes/clients/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('themes/clients/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('themes/clients/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('themes/clients/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('themes/clients/js/main.js') }}"></script>
</body>

</html>