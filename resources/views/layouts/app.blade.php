<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
   {{-- <script src="{{ asset('js/app.js') }}" defer></script>--}}
    <link href="{{ mix('css/app.css', 'build') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{asset('assets/img/assets/favicon.png')}}" rel="icon" type="image/png">
    <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/theme.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/ionicons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/et-line-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/themify-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/fonts/lovelo/stylesheet.css')}}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Raleway:100,200,300,400%7COpen+Sans:400,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/colors/blue.css')}}" id="color-scheme" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app">

    <!-- Start Header -->
    <nav class="navbar navbar-default fullwidth">
        <div class="container">

            <div class="navbar-header">
                <div class="container">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
                    <a class="navbar-brand"  href="{{ url('/') }}"><img src="{{asset('img/assets/logo-light.png')}}" class="logo-light" alt="#"><img src="{{asset('img/assets/logo-dark.png')}}" class="logo-dark" alt="#"></a>
                </div>
            </div>



            <div id="navbar" class="navbar-collapse collapse">
                <div class="container">
                    <ul class="nav navbar-nav menu-right">
                        @guest
                            <li class="dropdown adjust-pos">
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="dropdown adjust-pos">
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="dropdown"><a class="dropdown-toggle">  {{ Auth::user()->name }} <i class="ti-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li> <a class="dropdown-item" href="{{ route('cabinet') }}">{{ __('Cabinet') }}</a></li>
                                    <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>

                </div>
            </div>
        </div>
    </nav>
    <!-- End Header -->

    @section('breadcrumbs', Breadcrumbs::render())
    @yield('breadcrumbs')
    @include('layouts.partials.flash')
    @yield('content')
    <!-- Content -->

    <!-- Content -->

    <!-- Footer One -->
    <footer id="footer-1">

        <div class="footer-columns">
            <div class="container">
                <div class="row">

                    <div class="col-md-3">
                        <h4 class="subheading">About Us</h4>
                        <p>We are a digital studio offering a variety of solutions in product development, mobile and visual design. Nam metus, tellus id pellentesque feugiat, sem sem cursus orci, a placerat ante ante nec massa. Nam molestie, tellus id pellentesque feugiat.</p>
                    </div>

                    <div class="col-md-3">
                        <h4 class="subheading">Recent Posts</h4>
                        <ul class="footer-recent-posts">
                            <li><a href="blog-post-carousel.html">Branding Inspiration From Wander</a><span class="recent-post-date">June 4, 2015</span></li>
                            <li><a href="blog-post-video.html">Final Kickstarter Week - Vote for Cover</a><span class="recent-post-date">June 4, 2015</span></li>
                            <li><a href="blog-grid.html">Awesome Guide to Perfect Posts</a><span class="recent-post-date">June 4, 2015</span></li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4 class="subheading">Latest Tweets</h4>

                    </div>

                    <div class="col-md-3">
                        <h4 class="subheading">Instagram</h4>

                    </div>

                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-sm-12">
                        <p>© 2016 <a href="index.html" class="logo">Vossen</a> All Rights Reserved. </p>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <ul class="social-icons">
                            <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
                            <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon ion-social-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer One -->

    <!-- Start Back To Top -->
    <a id="back-to-top"><i class="icon ion-chevron-up"></i></a>
    <!-- End Back To Top -->
    </div>

    <!-- Scripts -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>
{{--    <script src="{{ mix('js/app.js', 'build') }}"></script>--}}
    <script src="{{asset('assets/js/scripts.js')}}"></script>

</body>
</html>
