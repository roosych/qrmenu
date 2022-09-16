@extends('layouts.dashboard')

@section('title', 'Админ-панель - Информация')

@section('content')

<div class="col-lg-7 col-12">
    <div class="card">
        <div class="card-body">
            <div class="row justify-content-between">
                <div class="col pe-md-32">
                    <h4>Информация о заведении</h4>

                    <p class="hp-p1-body">
                        Постарайся заполнить все поля, чтобы клиенты могли узнать больше о твоем заведении
                    </p>
                </div>

                <form id="infoForm" action="{{route('profile.info.update', $profile)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="col-12">
                        <div class="row">
                            <div class="col-5">
                                <label for="" class="form-label">Название заведения</label>
                                <input name="name" {{old('name')}} type="text" class="form-control mt-16" value="{{$profile->name}}" placeholder="Название заведения">
                                @error('name')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-7">
                                <label for="" class="form-label">Адрес</label>
                                <input name="adress" {{old('adress')}} type="text" class="form-control mt-16" value="{{$profile->adress}}" placeholder="Улица, номер дома">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <label for="" class="form-label mt-16">По какому номеру звонить?</label>
                                <input name="phone_1" {{old('phone_1')}} type="text" class="form-control mb-16" value="{{$profile->phone_1}}" placeholder="Контактный номер">
                            </div>
                            <div class="col-6">
                                <label for="" class="form-label mt-16">Если номер занят</label>
                                <input name="phone_2" {{old('phone_2')}} type="text" class="form-control mb-16" value="{{$profile->phone_2}}" placeholder="Еще один номер, на всякий случай">
                            </div>
                        </div>

                        <div class="input-group mb-32">
                            <span class="input-group-text">Краткая информация</span>
                            <textarea name="description" {{old('description')}} class="form-control">{{$profile->description}}</textarea>
                        </div>

                        <div class="col-3 mt-16">
                            <button type="submit" class="btn btn-primary w-100">Сохранить</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>


<div class="position-fixed bottom-0 end-0 p-16" style="z-index: 99">
    <div class="toast-container">
        <div class="toast align-items-center text-white bg-success border-0" role="alert" data-bs-delay="3000" data-bs-autohide="true" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body"></div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>



@endsection

@push('js')

@endpush