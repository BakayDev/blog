@extends('layouts.app')

@section('content')
<section class="checkout">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home')  }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('login')  }}">Login</a></li>
                <li class="breadcrumb-item active">Reset</li>
            </ul>
            <div class="row">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="col-md-4 mr-auto text-center mt40 mb40">

                        <div class="section-heading">
                            <h2>{{ __('Reset Password') }}</h2>
                            <hr class="separator">
                        </div>

                        @error('email')
                        <span class="invalid-feedback" role="alert"><a>{{ $message }}</a></span>
                        @enderror
                        <input  id="email" type="text" class="input-text @error('email') is-invalid @enderror" name="email"  value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail Address') }}" >
                    </div>

                    <div class="col-md-4 mr-auto">
                        <button type="submit" class="btn btn-primary btn-md btn-appear btn-cart-checkout"><span>{{ __('Send Password Reset Link') }}<i class="ion-ios-arrow-forward"></i></span></button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
