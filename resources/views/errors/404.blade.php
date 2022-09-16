@extends('layouts.error')

@section('title', '404')

@section('content')
    <div class="row hp-bg-color-dark-90 text-center">
        <div class="col-12 hp-error-content py-32">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col-12 mt-0 mt-sm-64 mb-32">

                    <h1 class="hp-error-content-title mb-0 mb-sm-8 fw-light">404</h1>

                    <h2 class="h1 mb-0 mb-sm-16">Oops, Page not found!</h2>

                    <p class="mb-32 hp-p1-body">You can go back home.</p>

                    <a href="#">
                        <button type="button" class="btn btn-primary">
                            <span>Back to Home</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection