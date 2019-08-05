@extends('layouts.app')

@section('content')
    <section class="checkout">
        <div class="container">
            <div class="row">
                    <div class="col-md-4 mr-auto text-center mt40 mb40">
                        <div class="section-heading">
                            <h2>{{ __('Verify Your Email Address') }}</h2>
                            <hr class="separator">
                        </div>
                        <div class="card-body">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                            @endif
                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                        </div>
                    </div>
            </div>
        </div>
    </section>
@endsection
