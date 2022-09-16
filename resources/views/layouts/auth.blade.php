<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="">
    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('app-assets/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('app-assets/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('app-assets/favicon/favicon-16x16.png')}}">
    <meta name="msapplication-TileColor" content="#0010f7">
    <meta name="theme-color" content="#ffffff">

    <!-- Plugin -->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugin/swiper-bundle.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/icons/iconly/index.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/icons/remix-icon/index.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/colors.css')}}">

    <!-- Base -->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/base/font-control.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/base/typography.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/base/base.css')}}">

    <!-- Theme -->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/theme/colors-dark.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/theme/theme-dark.css')}}">

    <!-- Layouts -->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/layouts/sider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/layouts/header.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/components.css')}}">
    <!-- Customizer -->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/layouts/customizer.css')}}">

    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">

    <title>@yield('title')</title>
</head>

<body>
<div class="row hp-authentication-page">
    <div class="col-12 col-lg-6 bg-primary-4 hp-bg-color-dark-90 position-relative">
        <div class="row hp-image-row h-100 px-8 px-sm-16 px-md-0 pb-32 pb-sm-0 pt-32 pt-md-0">
            <div class="col-12 hp-logo-item m-16 m-sm-32 m-md-64 w-auto px-0">
                <img class="hp-dark-none" src="{{asset('app-assets/img/logo/logo-vector-blue.svg')}}" alt="Logo">
            </div>

            <div class="col-12">
                <div class="row align-items-center justify-content-center h-100">
                    <div class="col-12 col-md-10 hp-bg-item text-center mb-32 mb-md-0">
                        <img class="hp-dark-none m-auto" src="{{asset('app-assets/img/pages/authentication/authentication-bg.svg')}}" alt="Background Image">
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('content')
</div>

<!-- Plugin -->
<script src="{{asset('app-assets/js/plugin/jquery.min.js')}}"></script>
<script src="{{asset('app-assets/js/plugin/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('app-assets/js/plugin/swiper-bundle.min.js')}}"></script>
<script src="{{asset('app-assets/js/plugin/jquery.mask.min.js')}}"></script>
<script src="{{asset('app-assets/js/plugin/autocomplete.min.js')}}"></script>
<script src="{{asset('app-assets/js/plugin/moment.min.js')}}"></script>

<!-- Layouts -->
<script src="{{asset('app-assets/js/layouts/sider.js')}}"></script>
<script src="{{asset('app-assets/js/components/input-number.js')}}"></script>

<!-- Base -->
<script src="{{asset('app-assets/js/base/index.js')}}../"></script>
<!-- Customizer -->
<script src="{{asset('app-assets/js/customizer.js')}}"></script>

<!-- Custom -->
<script src="{{asset('assets/js/main.js')}}"></script
</body>

</html>