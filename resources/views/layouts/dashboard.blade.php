<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="">
    <meta name="description" content="" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />

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
    @stack('css')


<!-- Base -->
{{--    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/base/font-control.css')}}">--}}
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
<main class="hp-bg-color-dark-90 d-flex min-vh-100">
    <div class="hp-sidebar hp-bg-color-black-0 hp-bg-color-dark-100">
        <div class="hp-sidebar-container">
            <div class="hp-sidebar-header-menu">
                <div class="row justify-content-between align-items-end me-12 ms-24 mt-24">
                    <div class="w-auto px-0 hp-sidebar-collapse-button hp-sidebar-visible">
                        <button type="button" class="btn btn-text btn-icon-only">
                            <i class="ri-menu-unfold-line" style="font-size: 16px;"></i>
                        </button>
                    </div>

                    <div class="w-auto px-0">
                        <div class="hp-header-logo d-flex align-items-end">
                            <a href="{{route('profile.index')}}">
                                <img class="hp-logo hp-sidebar-hidden hp-dir-none hp-dark-none" src="{{asset('app-assets/img/logo/logo.svg')}}" alt="logo">
                            </a>

                        </div>
                    </div>

                </div>

                @include('layouts.navigation.user')

            </div>

        </div>
    </div>

    <div class="hp-main-layout">
        <header>
            <div class="row w-100 m-0">
                <div class="col ps-18 pe-16 px-sm-24">
                    <div class="row w-100 align-items-center justify-content-between position-relative">
                        <div class="col w-auto hp-flex-none hp-mobile-sidebar-button me-24 px-0" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu">
                            <button type="button" class="btn btn-text btn-icon-only">
                                <i class="ri-menu-fill hp-text-color-black-80 hp-text-color-dark-30 lh-1" style="font-size: 24px;"></i>
                            </button>
                        </div>

                        <div class="hp-header-text-info col col-lg-14 col-xl-16 hp-header-start-text d-flex align-items-center hp-horizontal-none">
                            <div class="d-flex rounded-3 hp-text-color-primary-1 hp-text-color-dark-0 p-4 hp-bg-color-primary-4 hp-bg-color-dark-70" style="min-width: 18px">
                                <i class="iconly-Curved-InfoCircle"></i>
                            </div>

                            <p class="hp-header-start-text-item hp-input-label hp-text-color-black-100 hp-text-color-dark-0 ms-16 mb-0 lh-1 d-flex align-items-center">
                                Возникли вопросы ? Yoda всегда на связи 📡
                                <span class="fw-light hp-text-color-danger-3 ms-12">Напиши мне</span>

                                <a href="#" class="ms-8 mb-6 hp-text-color-black-60" target="_blank">
                                    <i class="iconly-Curved-EditSquare hp-text-color-dark-5"></i>
                                    <i class="hp-text-color-dark-0 "></i>
                                </a>
                            </p>
                        </div>

                        <div class="col hp-flex-none w-auto hp-horizontal-block">
                            <div class="hp-header-logo d-flex align-items-end">
                                <a href="{{route('profile.index')}}">
                                    <img class="hp-logo hp-sidebar-hidden hp-dir-none hp-dark-none" src="{{asset('app-assets/img/logo/logo.svg')}}" alt="logo">
                                </a>
                            </div>
                        </div>

                        <div class="col hp-flex-none w-auto pe-0">
                            <div class="row align-items-center justify-content-end">

                                <div class="me-4 w-auto px-0 position-relative">
                                    <a href="#" class="btn btn-text btn-icon-only">
                                        <i class="iconly-Curved-Setting hp-text-color-black-60"></i>
                                    </a>
                                </div>

                                <div class="me-4 w-auto px-0 position-relative">
                                    <a href="{{route('logout')}}" class="btn btn-text btn-icon-only" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="iconly-Curved-Logout hp-text-color-black-60"></i>
                                    </a>
                                    <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="offcanvas offcanvas-start hp-mobile-sidebar" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel" style="width: 256px;">
            <div class="offcanvas-header justify-content-between align-items-end me-16 ms-24 mt-16 p-0">
                <div class="w-auto px-0">
                    <div class="hp-header-logo d-flex align-items-end">
                        <a href="{{route('profile.index')}}">
                            <img class="hp-logo hp-sidebar-hidden hp-dir-none hp-dark-none" src="{{asset('app-assets/img/logo/logo.svg')}}" alt="logo">
                        </a>
                    </div>
                </div>

                <div class="w-auto px-0 hp-sidebar-collapse-button hp-sidebar-hidden" data-bs-dismiss="offcanvas" aria-label="Close">
                    <button type="button" class="btn btn-text btn-icon-only">
                        <i class="ri-close-fill lh-1 hp-text-color-black-80" style="font-size: 24px;"></i>
                    </button>
                </div>
            </div>

            <div class="hp-sidebar hp-bg-color-black-0 hp-bg-color-dark-100">
                <div class="hp-sidebar-container">
                    <div class="hp-sidebar-header-menu">
                        <div class="row justify-content-between align-items-end me-12 ms-24 mt-24">
                            <div class="w-auto px-0 hp-sidebar-collapse-button hp-sidebar-visible">
                                <button type="button" class="btn btn-text btn-icon-only">
                                    <i class="ri-menu-unfold-line" style="font-size: 16px;"></i>
                                </button>
                            </div>

                            <div class="w-auto px-0">
                                <div class="hp-header-logo d-flex align-items-end">
                                    <a href="{{route('profile.index')}}">
                                        <img class="hp-logo hp-sidebar-hidden hp-dir-none hp-dark-none" src="{{asset('app-assets/img/logo/logo.svg')}}" alt="logo">
                                    </a>
                                </div>
                            </div>
                        </div>

                        @include('layouts.navigation.user')

                    </div>
                </div>
            </div>
        </div>

        <div class="hp-main-layout-content">
            <div class="row mb-32 gy-32">

            @yield('content')

            </div>
        </div>

        <footer class="w-100 py-18 px-16 py-sm-24 px-sm-32 hp-bg-color-black-10 hp-bg-color-dark-100">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12">
                    <p class="hp-badge-text mb-0 text-center text-sm-start hp-text-color-dark-30">©2022 Cafe menu, All rights Reserved</p>
                </div>
            </div>
        </footer>
    </div>
</main>

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
<script src="{{asset('assets/js/main.js')}}"></script>
@stack('js')
</body>

</html>