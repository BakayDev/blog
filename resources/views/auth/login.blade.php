@extends('layouts.app')

@section('content')
    <section class="checkout">
        <div class="container">

            <div class="row">

                <form method="POST" action="{{ route('login') }}">
                 @csrf
                <div class="col-md-4 mr-auto text-center mt40 mb40">
                    <div class="section-heading">
                        <h2>{{ __('Login') }}</h2>
                        <hr class="separator">
                    </div>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                    <a >{{ $message }}</a></span>
                    @enderror
                    <input  id="email" type="text" class="input-text @error('email') is-invalid @enderror" name="email"  value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail Address') }}" >


                    @error('password')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                    <input id="password" type="password" class="input-text   @error('password')   is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required autocomplete="current-password">

                    <div class="pretty p-default">
                        <input type="checkbox" name="remember"  id="remember" {{ old('remember') ? 'checked' : '' }}/>
                        <div class="state">
                            <label style="color: #888">  {{ __('Remember Me') }}</label>
                        </div>
                    </div>

                </div>

                <div class="col-md-4 mr-auto">

                    <button type="submit" class="btn btn-primary btn-md btn-appear btn-cart-checkout"><span> {{ __('Login') }} <i class="ion-ios-arrow-forward"></i></span></button>

                    @if (Route::has('password.request'))
                            <p class="small-print">  <a href="{{ route('password.request') }}" class="highlight">  {{ __('Forgot Your Password?') }}</a></p>
                    @endif

                    @if (Route::has('register'))

                            <a  href="{{ route('register') }}" class="highlight pull-right mt20"><i class="ion-android-exit"></i> {{ __('Register') }}</a>

                    @endif

                </div>
                </form>
            </div>
        </div>
    </section>
@endsection
