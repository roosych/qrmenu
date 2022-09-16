@extends('layouts.auth')

@section('title', 'Вход в кабинет')

@section('content')
    <div class="col-12 col-lg-6 py-sm-64 py-lg-0">
        <div class="row align-items-center justify-content-center h-100 mx-4 mx-sm-n32">
            <div class="col-12 col-md-9 col-xl-7 col-xxxl-5 px-8 px-sm-0 pt-24 pb-48">
                <h1 class="mb-0 mb-sm-24">Вход в кабинет</h1>
                <form class="mt-16 mt-sm-32 mb-8" action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-16">
                        <label for="loginEmail" class="form-label">Email :</label>
                        <input type="text" class="form-control" id="loginEmail" name="email">
                    </div>

                    <div class="mb-16">
                        <label for="loginPassword" class="form-label">Пароль :</label>
                        <input type="password" class="form-control" id="loginPassword" name="password">
                    </div>

                    <div class="row align-items-center justify-content-between mb-16">
                        <div class="col hp-flex-none w-auto">
                            <a class="hp-button text-black-80 hp-text-color-dark-40" href="#">Восстановить пароль</a>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Войти</button>
                </form>

                <div class="col-12 hp-form-info">
                    <span class="text-black-80 hp-text-color-dark-40 hp-caption me-4">Еще нет аккаунта ?</span>
                    <a class="text-primary-1 hp-text-color-dark-primary-2 hp-caption" href="{{route('register')}}">Создать аккаунт</a>
                </div>

            </div>
        </div>
    </div>
@endsection
