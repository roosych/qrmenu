@extends('layouts.dashboard')

@section('title', 'Админ-панель - Главная')

@section('content')

<div class="col-12">
    <div class="hp-page-title">
        <h3 class="mb-8">Приветствую, {{Auth::user()->name}} 👋</h3>
        <p class="hp-p1-body mb-0">Покажу тебе некоторую статистику и последние твои действия</p>
    </div>
</div>

<div class="col-12">
    <div class="card hp-card-1 hp-upgradePlanCardOne">
        <div class="position-absolute top-0 start-0 w-100 h-100 hp-upgradePlanCardOne-bg hp-dark-none" style="background-image: url({{asset('app-assets/img/dasboard/analytics-payment-bg.svg')}}); background-size: cover; background-position: right center; z-index: -1;"></div>

        <div class="card-body">
            <div class="row align-items-center mt-8">
                <div class="col-12 mb-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col flex-grow-1">
                            <h4 class="mb-8">Сейчас твоя страница недоступна. Заполни общую информацию.</h4>
                            <p class="hp-p1-body mb-0">название заведения, ссылка на qr меню, контакты</p>
                        </div>

                        <div class="col hp-flex-none w-auto">
                            <a href="{{route('profile.info')}}" class="btn mt-16 mt-sm-0 text-primary hp-bg-dark-primary-1 hp-border-color-dark-primary-1 hp-text-color-dark-0">
                                <span>Заполнить</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="row g-32 mb-32">
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row g-16">
                        <div class="col-6 hp-flex-none w-auto">
                            <div class="avatar-item d-flex align-items-center justify-content-center avatar-lg bg-primary-4 hp-bg-color-dark-primary rounded-circle">
                                <i class="iconly-Curved-Category text-primary hp-text-color-dark-primary-2" style="font-size: 24px;"></i>
                            </div>
                        </div>

                        <div class="col">
                            <h3 class="mb-4 mt-8">12</h3>
                            <p class="hp-p1-body mb-0 text-black-80 hp-text-color-dark-30">Категорий</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row g-16">
                        <div class="col-6 hp-flex-none w-auto">
                            <div class="avatar-item d-flex align-items-center justify-content-center avatar-lg bg-secondary-4 hp-bg-color-dark-secondary rounded-circle">
                                <i class="iconly-Curved-Document text-secondary" style="font-size: 24px;"></i>
                            </div>
                        </div>

                        <div class="col">
                            <h3 class="mb-4 mt-8">124</h3>
                            <p class="hp-p1-body mb-0 text-black-80 hp-text-color-dark-30">Позиций меню</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row g-16">
                        <div class="col-6 hp-flex-none w-auto">
                            <div class="avatar-item d-flex align-items-center justify-content-center avatar-lg bg-warning-4 hp-bg-color-dark-warning rounded-circle">
                                <i class="iconly-Curved-Scan text-warning" style="font-size: 24px;"></i>
                            </div>
                        </div>

                        <div class="col">
                            <h3 class="mb-4 mt-8">208</h3>
                            <p class="hp-p1-body mb-0 text-black-80 hp-text-color-dark-30">Сканирований</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row g-16">
                        <div class="col-6 hp-flex-none w-auto">
                            <div class="avatar-item d-flex align-items-center justify-content-center avatar-lg bg-danger-4 hp-bg-color-dark-danger rounded-circle">
                                <i class="iconly-Light-Discount text-danger" style="font-size: 24px;"></i>
                            </div>
                        </div>

                        <div class="col">
                            <h3 class="mb-4 mt-8">4</h3>
                            <p class="hp-p1-body mb-0 text-black-80 hp-text-color-dark-30">Активных акций</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-32">
        <div class="col-12 col-xl-8">
            <div class="row g-32">

                <div class="col-12">
                    <div class="card hp-project-ecommerce-table-card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex align-items-center justify-content-between mb-32">
                                        <h5 class="mb-0">Последние добавленные</h5>
                                        <a href="" class="hp-p1-body mb-0 fw-medium text-black-100 hp-text-color-dark-0">Все</a>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table align-middle mb-0">
                                            <thead>
                                            <tr>
                                                <th style="min-width: 110px;">
                                                    <span class="hp-badge-size d-block pb-16 fw-normal text-black-60 hp-text-color-dark-50 text-uppercase">Дата</span>
                                                </th>
                                                <th style="min-width: 180px;">
                                                    <span class="hp-badge-size d-block pb-16 fw-normal text-black-60 hp-text-color-dark-50 text-uppercase">Название</span>
                                                </th>
                                                <th>
                                                    <span class="hp-badge-size d-block pb-16 fw-normal text-black-60 hp-text-color-dark-50 text-uppercase">Цена</span>
                                                </th>
                                                <th>
                                                    <span class="hp-badge-size d-block pb-16 fw-normal text-black-60 hp-text-color-dark-50 text-uppercase">Статус</span>
                                                </th>
                                                <th class="text-center">
                                                    <span class="hp-badge-size d-block pb-16 fw-normal text-black-60 hp-text-color-dark-50 text-uppercase">Действия</span>
                                                </th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td class="ps-0">
                                                    <span class="mb-0 fw-medium text-black-100 hp-text-color-dark-0">Июнь 9, 2020</span>
                                                </td>
                                                <td>
                                                    <span class="mb-0 text-black-80 hp-text-color-dark-30">Яблочный пирог</span>
                                                </td>
                                                <td>
                                                    <span class="mb-0 text-black-80 hp-text-color-dark-30">1,50₼</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-4 hp-bg-dark-success text-success border-success">Виден</span>
                                                </td>
                                                <td>
                                                    <div class="button-group text-center">
                                                        <a href="#">
                                                            <i class="iconly-Curved-EditSquare hp-cursor-pointer hp-transition hp-hover-text-color-warning-1 text-black-80" style="font-size: 24px;"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="iconly-Curved-Delete hp-cursor-pointer hp-transition hp-hover-text-color-danger-1 text-black-80" style="font-size: 24px;"></i>
                                                        </a>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0">
                                                    <span class="mb-0 fw-medium text-black-100 hp-text-color-dark-0">Июнь 9, 2020</span>
                                                </td>
                                                <td>
                                                    <span class="mb-0 text-black-80 hp-text-color-dark-30">Малиновый суп</span>
                                                </td>
                                                <td>
                                                    <span class="mb-0 text-black-80 hp-text-color-dark-30">4,80₼</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-danger-4 hp-bg-dark-danger text-danger border-danger">Невиден</span>
                                                </td>
                                                <td>
                                                    <div class="button-group text-center">
                                                        <a href="#">
                                                            <i class="iconly-Light-EditSquare hp-cursor-pointer hp-transition hp-hover-text-color-warning-1 text-black-80" style="font-size: 24px;"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="iconly-Light-Delete hp-cursor-pointer hp-transition hp-hover-text-color-danger-1 text-black-80" style="font-size: 24px;"></i>
                                                        </a>
                                                    </div>

                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-12 col-xl-4">
            <div class="card border-none hp-card-2 px-12 py-16 hp-upgradePlanCardOne">
                <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: url(../app-assets/img/dasboard/analytics-download-bg.png); background-size: cover; background-position: right center; z-index: -1;"></div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h5 class="mb-0 text-black-0">Скачай, распечатай меню и начни увеличивать свой средний чек уже сейчас</h5>

                            <button type="button" class="btn mt-32 border-primary bg-black-0 hp-bg-color-dark-primary-1 text-primary hp-text-color-dark-0">
                                <i class="iconly-Light-Download remix-icon"></i>
                                <span>Скачать</span>
                            </button>
                        </div>

                        <div class="col hp-flex-none w-auto position-absolute top-0 end-0 h-100 pe-0">
                            <img src="../app-assets/img/dasboard/analytics-download-vector.svg" class="h-100 hp-dir-scale-x-n1" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection