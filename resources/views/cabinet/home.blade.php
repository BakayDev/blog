@extends('layouts.app')

@section('breadcrumbs')
    <section style="padding-top: 80px;">

            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">Cabinet</li>
            </ul>

    </section>
@endsection

@section('content')
    <section class="page-title parallax bg-img-4">
        <div class="page-title-content">

            <div class="container">
                <div class="col-sm-12 text-center">
                    <h1 class="white-until-load">Cabinet</h1>
                    <hr class="separator">
                    <h5 class="subheading white-until-load">User cabinet page</h5>
                </div>
            </div>
        </div>
    </section>
@endsection