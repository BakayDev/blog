@extends('layouts.app')

@section('content')
<section class="checkout">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home')  }}">Home</a></li>
                <li class="breadcrumb-item active">Register</li>
            </ul>
            <div class="row">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="col-md-4 mr-auto text-center mt40 mb40">
                        <div class="section-heading">
                            <h2>{{ __('Register') }}</h2>
                            <hr class="separator">
                        </div>

                        @error('name')
                        <span class="invalid-feedback" role="alert"><a >{{ $message }}</a></span>
                        @enderror
                        <input  id="name" type="text" class="input-text @error('name') is-invalid @enderror" name="name"  value="{{ old('name') }}" required autocomplete="email" autofocus placeholder="{{ __('Name') }}" >



                        @error('email')
                        <span class="invalid-feedback" role="alert"><a>{{ $message }}</a></span>
                        @enderror
                        <input  id="email" type="text" class="input-text @error('email') is-invalid @enderror" name="email"  value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail Address') }}" >


                        @error('password')
                        <span class="invalid-feedback" role="alert"><a>{{ $message }}</a></span>
                        @enderror
                        <input id="password" type="password" class="input-text   @error('password')   is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required autocomplete="current-password">



                        <input id="password-confirm" type="password" class="input-text" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required autocomplete="current-password">




                    </div>

                    <div class="col-md-4 mr-auto">

                        <button type="submit" class="btn btn-primary btn-md btn-appear btn-cart-checkout"><span>    {{ __('Register') }} <i class="ion-ios-arrow-forward"></i></span></button>

                        @if (Route::has('password.request'))
                            <p class="small-print">  <a  href="{{ route('password.request') }}" class="highlight">  {{ __('Forgot Your Password?') }}</a></p>
                        @endif

                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="highlight pull-right mt20"><i class="ion-android-exit"></i> {{ __('Login') }}</a>
                        @endif

                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
