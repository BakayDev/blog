@extends('layouts.app')

@section('content')
    <section class="page-title parallax bg-img-4">

        <div class="page-title-content">

            <div class="container">
                <div class="col-sm-12 text-center">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>

                    <h1 class="white-until-load">Main</h1>
                    <hr class="separator">
                    <h5 class="subheading white-until-load">Main page</h5>
                </div>
            </div>
        </div>
    </section>

@endsection
