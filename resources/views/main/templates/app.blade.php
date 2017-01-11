<!DOCTYPE html>
<html>
<head>
    <title>luoweis</title>
    <!-- ======== META TAGS ======== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="description" content="House. Responsive Template.">
    <meta name="keywords" content="my, tags">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ======== / META TAGS ======== -->
    <!-- ======== STYLESHEETS ======== -->
    <link rel="stylesheet" href="{{url('assets/css/reset.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('assets/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('assets/css/owl.carousel.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url("assets/css/style.css")}}" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Alike" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic&subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="http://house.studio-themes.com/assets/css/ie.css">
    <![endif]-->
    <!-- ======== / STYLESHEETS ======== -->
    <!-- ======== STANDARD SCRIPTS ======== -->
    <script src="{{url('assets/js/jquery.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="{{url('assets/js/html5shiv.js')}}"></script>
    <script src="{{url('assets/js/respond.js')}}"></script>
    <![endif]-->
    <!-- ======== / STANDARD SCRIPTS ======== -->
</head>
<body>
<div id="preloader"></div>
<div id="page-container">
    <header id="home" class="header-style-1 sticky">
        <div class="container">
            <div class="row">
                <div class="col-md-12 clearfix">
                    <div id="logo-container">
                        <div class="tb">
                            <div class="tb-cell">
                                <a href="{{ url('/') }}">
                                    <img src="{{url('assets/img/luoweis.png')}}" class="standard-logo" alt="">
                                </a>
                            </div>
                        </div>
                        <div id="mobile-button">
                            <hr><hr><hr>
                        </div>
                    </div>
                    <div id="menu-container">
                        <nav>
                            <ul class="clearfix">
                                <li class="current-menu-item"><a href="{{ url('/') }}">Home</a>
                                </li>
                                <li><a href="#">Posts</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Standard</a></li>
                                        <li><a href="#">Slideshow</a></li>
                                        <li><a href="#">Quote</a></li>
                                        <li><a href="#">Link</a></li>
                                        <li><a href="#">Video</a></li>
                                        <li><a href="#">Audio</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Category</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Travel</a></li>
                                        <li><a href="#">Lifestyle</a></li>
                                        <li><a href="#">Video</a></li>
                                        <li><a href="#">Music</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">{{ Auth::user()->name }}</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('/logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>
                                        </li>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="section-featured" class="clearfix">
        <div id="prev-owl">
            <i class="fa fa-chevron-left"></i>
        </div>
        <div id="next-owl">
            <i class="fa fa-chevron-right"></i>
        </div>
        <div id="featured">
            <div>
                <a href="#"><img src="{{url('assets/img/slider/1.jpg')}}" alt=""></a>
                <span>Donec sed velit consectetur</span>
            </div>
            <div>
                <a href="#"><img src="{{url('assets/img/slider/2.jpg')}}" alt=""></a>
                <span>Donec sed velit consectetur</span>
            </div>
            <div>
                <a href="#"><img src="{{url('assets/img/slider/3.jpg')}}" alt=""></a>
                <span>Donec sed velit consectetur</span>
            </div>
            <div>
                <a href="#"><img src="{{url('assets/img/slider/4.jpg')}}" alt=""></a>
                <span>Donec sed velit consectetur</span>
            </div>
            <div>
                <a href="#"><img src="{{url('assets/img/slider/5.jpg')}}" alt=""></a>
                <span>Donec sed velit consectetur</span>
            </div>
            <div>
                <a href="#"><img src="{{url('assets/img/slider/6.jpg')}}" alt=""></a>
                <span>Donec sed velit consectetur</span>
            </div>
            <div>
                <a href="#"><img src="{{url('assets/img/slider/7.jpg')}}" alt=""></a>
                <span>Donec sed velit consectetur</span>
            </div>
        </div>
    </section>
    @yield('content')
    <footer id="footer-main">
        <div class="container">
            <div class="row">
                <div id="foot-left" class="col-lg-6 col-sm-6">
                    <img src="{{url('assets/img/luoweis.png')}}" alt="">
                    <p>© 2017 luoweis. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- ======== OTHER SCRIPTS ======== -->
<script src="{{url('assets/js/plugins.js')}}"></script>
<script src="{{url('assets/js/scripts.js')}}"></script>
<!-- ======== /OTHER SCRIPTS ======== -->
</body>
</html>
