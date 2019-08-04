<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Wander - Multipurpose HTML Template</title>
        <link href="assets/img/assets/favicon.png" rel="icon" type="image/png">
        <link href="assets/css/plugins.css" rel="stylesheet" type="text/css">
        <link href="assets/css/theme.css" rel="stylesheet" type="text/css">
        <link href="assets/css/ionicons.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/et-line-icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/themify-icons.css" rel="stylesheet" type="text/css">
        <link href="assets/fonts/lovelo/stylesheet.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Raleway:100,200,300,400%7COpen+Sans:400,300' rel='stylesheet' type='text/css'>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css">
        <link href="assets/css/colors/blue.css" id="color-scheme" rel="stylesheet" type="text/css">

        <!-- Styles -->

    </head>
    <body>


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
                        <a class="navbar-brand" href="#"><img src="img/assets/logo-light.png" class="logo-light" alt="#"><img src="img/assets/logo-dark.png" class="logo-dark" alt="#"></a>
                    </div>
                </div>



                <div id="navbar" class="navbar-collapse collapse">
                    <div class="container">
                        <ul class="nav navbar-nav menu-right">

                            @if (Route::has('login'))
                                    @auth
                                      <li class="dropdown adjust-pos"><a href="{{ url('/home') }}">Home</a></li>
                                    @else
                                        <li class="dropdown adjust-pos"><a href="{{ route('login') }}">Login</a></li>
                                        @if (Route::has('register'))
                                        <li class="dropdown adjust-pos"> <a href="{{ route('register') }}">Register</a></li>
                                        @endif
                                    @endauth
                            @endif

                        </ul>

                    </div>
                </div>
            </div>
        </nav>
        <!-- End Header -->

        <!-- Portfolio -->
        <section class="blog">
            <div class="container">
                <div class="row">

                    <div class="col-md-9">

                        <ul class="blog-standard">

                            <li>
                                <div class="side-details">
                                    <div class="post-date">
                                        <h4 class="month">Jan</h4>
                                        <h3 class="day">30</h3>
                                        <span class="year">2016</span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <a href="blog-post-carousel.html"><img src="img/blog/1.jpg" class="img-responsive width100" alt="#"></a>
                                    <div class="post-text">
                                        <a class="link-to-post" href="blog-post-carousel.html"><h4>Awesome Standard Post</h4></a>
                                        <p class="blog-post-categories">
                                            <span><i class="ion-ios-pricetags-outline"></i></span>
                                            <a href="#">Lifestyle</a>
                                            <span>,</span>
                                            <a href="#">Travel</a>
                                        </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel odio sit amet turpis mattis tincidunt. Nulla nibh tellus, euismod at commodo quis, dictum eget tortor. Aliquam varius, nulla nec placerat consequat, tortor ante dictum ligula, in lobortis sapien lectus sed elit...<p>
                                    </div>
                                    <a class="read-more-link btn-appear" href="blog-post-carousel.html"><span>Read More <i class="ion-android-arrow-forward"></i></span></a>
                                </div>
                            </li>

                            <li>
                                <div class="side-details">
                                    <div class="post-date">
                                        <h4 class="month">Dec</h4>
                                        <h3 class="day">24</h3>
                                        <span class="year">2015</span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="image-slider1 owl-carousel navigation-thin pagination-in">
                                        <div><img src="img/blog/5.jpg" class="img-responsive width100" alt="#"></div>
                                        <div><img src="img/blog/3.jpg" class="img-responsive width100" alt="#"></div>
                                        <div><img src="img/blog/4.jpg" class="img-responsive width100" alt="#"></div>
                                    </div>
                                    <div class="post-text">
                                        <a class="link-to-post" href="blog-post-carousel.html"><h4>Carousel is Always Amazing</h4></a>
                                        <p class="blog-post-categories">
                                            <span><i class="ion-ios-pricetags-outline"></i></span>
                                            <a href="#">Travel</a>
                                            <span>,</span>
                                            <a href="#">Wander</a>
                                        </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel odio sit amet turpis mattis tincidunt. Nulla nibh tellus, euismod at commodo quis, dictum eget tortor. Aliquam varius, nulla nec placerat consequat, tortor ante dictum ligula, in lobortis sapien lectus sed elit...<p>
                                    </div>
                                    <a class="read-more-link btn-appear" href="blog-post-carousel.html"><span>Read More <i class="ion-android-arrow-forward"></i></span></a>
                                </div>
                            </li>

                            <li>
                                <div class="side-details">
                                    <div class="post-date">
                                        <h4 class="month">Oct</h4>
                                        <h3 class="day">17</h3>
                                        <span class="year">2015</span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="video-container">
                                        <iframe src='http://player.vimeo.com/video/157100757' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                    </div>
                                    <div class="post-text">
                                        <a class="link-to-post" href="blog-post-carousel.html"><h4>Awesome Video Post</h4></a>
                                        <p class="blog-post-categories">
                                            <span><i class="ion-ios-pricetags-outline"></i></span>
                                            <a href="#">Travel</a>
                                            <span>,</span>
                                            <a href="#">Lifestyle</a>
                                        </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel odio sit amet turpis mattis tincidunt. Nulla nibh tellus, euismod at commodo quis, dictum eget tortor. Aliquam varius, nulla nec placerat consequat, tortor ante dictum ligula, in lobortis sapien lectus sed elit...<p>
                                    </div>
                                    <a class="read-more-link btn-appear" href="blog-post-carousel.html"><span>Read More <i class="ion-android-arrow-forward"></i></span></a>
                                </div>
                            </li>

                            <li>
                                <div class="side-details">
                                    <div class="post-date">
                                        <h4 class="month">Sep</h4>
                                        <h3 class="day">24</h3>
                                        <span class="year">2015</span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <a href="blog-post-carousel.html"><h3>A flower does not think of competing with the flower next to it. It just blooms.</h3></a>
                                    <div class="post-text">
                                        <p class="blog-post-categories">
                                            <span><i class="ion-ios-pricetags-outline"></i></span>
                                            <a href="#">Wander</a>
                                            <span>,</span>
                                            <a href="#">Lifestyle</a>
                                            <span>,</span>
                                            <a href="#">Travel</a>
                                        </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel odio sit amet turpis mattis tincidunt. Nulla nibh tellus, euismod at commodo quis, dictum eget tortor. Aliquam varius, nulla nec placerat consequat, tortor ante dictum ligula, in lobortis sapien lectus sed elit...<p>
                                    </div>
                                    <a class="read-more-link btn-appear" href="blog-post-carousel.html"><span>Read More <i class="ion-android-arrow-forward"></i></span></a>
                                </div>
                            </li>

                        </ul>

                        <!-- Pagination -->
                        <div class="col-md-12 text-center">
                            <ul class="blog-pagination">
                                <li>
                                    <a href="#">
                                        <i class="ion-android-arrow-back"></i>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                                <li>
                                    <a href="#">5</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-android-arrow-forward"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Pagination -->

                    </div>

                    <!-- Sidebar -->
                    <div class="col-md-3 sidebar">

                        <div class="blog-widget">
                            <h5>About</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat.</p>
                        </div>

                        <div class="blog-widget">
                            <h5>Categories</h5>
                            <ul class="category-list list-icons">
                                <li><a href="#"><i class="ion-ios-arrow-right"></i>Travel</a></li>
                                <li><a href="#"><i class="ion-ios-arrow-right"></i>Lifestyle</a></li>
                                <li><a href="#"><i class="ion-ios-arrow-right"></i>Wander</a></li>
                                <li><a href="#"><i class="ion-ios-arrow-right"></i>Graphics</a></li>
                                <li><a href="#"><i class="ion-ios-arrow-right"></i>Other Bits</a></li>
                            </ul>
                        </div>

                        <div class="blog-widget blog-tags">
                            <h5>Tags</h5>
                            <ul class="tags-list">
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Photography</a></li>
                                <li><a href="#">Branding</a></li>
                                <li><a href="#">Videos</a></li>
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">Apps</a></li>
                                <li><a href="#">Development</a></li>
                            </ul>
                        </div>

                        <div class="blog-widget">
                            <h5>Archives</h5>
                            <ul class="category-list list-icons">
                                <li><a href="#"><i class="ion-ios-arrow-right"></i>April 2016</a></li>
                                <li><a href="#"><i class="ion-ios-arrow-right"></i>March 2016</a></li>
                                <li><a href="#"><i class="ion-ios-arrow-right"></i>February 2016</a></li>
                                <li><a href="#"><i class="ion-ios-arrow-right"></i>January 2016</a></li>
                                <li><a href="#"><i class="ion-ios-arrow-right"></i>December 2015</a></li>
                            </ul>
                        </div>

                        <div class="sidebar-share">
                            <ul class="list-inline">
                                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                <li><a href="#"><i class="ti-pinterest-alt"></i></a></li>
                                <li><a href="#"><i class="ti-google"></i></a></li>
                            </ul>
                        </div>


                    </div>
                    <!-- End Sidebar -->

                </div>
            </div>
        </section>
        <!-- End Portfolio -->

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
                            <div id="twitter-feed" data-twitter-widget-id="455427632419442688"></div>
                        </div>

                        <div class="col-md-3">
                            <h4 class="subheading">Instagram</h4>
                            <div id="instagram-feed" data-instagram-username="vossen_inc"><ul></ul></div>
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

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>
</html>
