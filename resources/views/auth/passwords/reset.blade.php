@extends('layouts.app')
@section('breadcrumbs')
    <section style="padding-top: 80px;">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home')  }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('login')  }}">Login</a></li>
                <li class="breadcrumb-item"><a href="{{ route('password.request')  }}">Reset</a></li>
                <li class="breadcrumb-item active">Change</li>
            </ul>
        </div>
    </section>
@endsection
@section('content')
    <section class="checkout">
        <div class="container">
            <div class="row">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="col-md-4 mr-auto text-center mt40 mb40">
                        <div class="section-heading">
                            <h2>{{ __('Reset Password') }}</h2>
                            <hr class="separator">
                        </div>

                        @error('email')
                        <span class="invalid-feedback" role="alert"><a>{{ $message }}</a></span>
                        @enderror
                        <input id="email" type="text" class="input-text @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                               placeholder="{{ __('E-Mail Address') }}">

                        @error('password')
                        <span class="invalid-feedback" role="alert"><a>{{ $message }}</a></span>
                        @enderror
                        <input id="password" type="password"
                               class="input-text   @error('password')   is-invalid @enderror" name="password"
                               placeholder="{{ __('Password') }}" required autocomplete="current-password">

                        <input id="password-confirm" type="password" class="input-text" name="password_confirmation"
                               placeholder="{{ __('Confirm Password') }}" required autocomplete="current-password">

                    </div>

                    <div class="col-md-4 mr-auto">
                        <button type="submit" class="btn btn-primary btn-md btn-appear btn-cart-checkout"><span>  {{ __('Reset Password') }}<i
                                        class="ion-ios-arrow-forward"></i></span></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
