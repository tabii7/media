@extends('layouts.app')

@section('content')
    <style>
        /* Add this CSS to your stylesheet */
        .form-control:focus {
            border-color: #eee;
            box-shadow: 0 0 0 0.1rem rgba(0, 0, 0, 0.25);
            /* Optional: Add a box shadow for a more prominent focus effect */
        }
    </style>
    <section class="" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black mt-1 mb-4" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-2 mx-1 mx-md-4 mt-4">Register</p>

                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="row mb-3 ">

                                            <div class="col-md-10 m-auto">
                                                <label for="name" class=" col-form-label">{{ __('Name') }}</label>
                                                <input id="name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">

                                            <div class="col-md-10 m-auto">
                                                <label for="email"
                                                    class=" col-form-label ">{{ __('Email Address') }}</label>
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email') }}" required autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">

                                            <div class="col-md-10 m-auto">
                                                <label for="password" class=" col-form-label ">{{ __('Password') }}</label>
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="new-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">

                                            <div class="col-md-10 m-auto">
                                                <label for="password-confirm"
                                                    class=" col-form-label ">{{ __('Confirm Password') }}</label>
                                                <input id="password-confirm" type="password" class="form-control"
                                                    name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="row mb-0">
                                            <div class=" col-md-10 m-auto">
                                                <div class="d-flex justify-content-end">

                                                    <button type="submit" class="btn btn-primary ">Register </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="{{asset('images/register-img.webp')}}"
                                        class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
