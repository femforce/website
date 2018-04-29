<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">

        <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">


        <link href='//fonts.googleapis.com/css?family=RobotoDraft:300,400,400italic,500,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('theme/jobboard-free-lite/assets/img/favicon.png')}}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('theme/jobboard-free-lite/assets/css/bootstrap.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('theme/jobboard-free-lite/assets/css/jasny-bootstrap.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('theme/jobboard-free-lite/assets/css/bootstrap-select.min.css')}}" type="text/css">
        <!-- Material CSS -->
        <link rel="stylesheet" href="{{asset('theme/jobboard-free-lite/assets/css/material-kit.css')}}" type="text/css">
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{asset('theme/jobboard-free-lite/assets/fonts/font-awesome.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('theme/jobboard-free-lite/assets/fonts/themify-icons.css')}}">

        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('theme/jobboard-free-lite/assets/extras/animate.css')}}" type="text/css">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{asset('theme/jobboard-free-lite/assets/extras/owl.carousel.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('theme/jobboard-free-lite/assets/extras/owl.theme.css')}}" type="text/css">
        <!-- Rev Slider CSS -->
        <link rel="stylesheet" href="{{asset('theme/jobboard-free-lite/assets/extras/settings.css')}}" type="text/css">
        <!-- Slicknav js -->
        <link rel="stylesheet" href="{{asset('theme/jobboard-free-lite/assets/css/slicknav.css')}}" type="text/css">
        <!-- Main Styles -->
        <link rel="stylesheet" href="{{asset('theme/jobboard-free-lite/assets/css/main.css')}}" type="text/css">
        <!-- Responsive CSS Styles -->
        <link rel="stylesheet" href="{{asset('theme/jobboard-free-lite/assets/css/responsive.css')}}" type="text/css">

        <!-- Color CSS Styles  -->
        <link rel="stylesheet" type="text/css" href="{{asset('theme/jobboard-free-lite/assets/css/colors/red.css')}}" media="screen" />
        <link rel="stylesheet" type="text/css" href="{{asset('css/react-draft-wysiwyg.css')}}" media="screen" />

        <!-- Main JS  -->
        <script type="text/javascript" src="{{asset('theme/jobboard-free-lite/assets/js/jquery-min.js')}}"></script>
        <script type="text/javascript" src="{{asset('theme/jobboard-free-lite/assets/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('theme/jobboard-free-lite/assets/js/material.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('theme/jobboard-free-lite/assets/js/material-kit.js')}}"></script>
        <script type="text/javascript" src="{{asset('theme/jobboard-free-lite/assets/js/jquery.parallax.js')}}"></script>
        <script type="text/javascript" src="{{asset('theme/jobboard-free-lite/assets/js/owl.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('theme/jobboard-free-lite/assets/js/jquery.slicknav.js')}}"></script>
        <script type="text/javascript" src="{{asset('theme/jobboard-free-lite/assets/js/main.js')}}"></script>
        <script type="text/javascript" src="{{asset('theme/jobboard-free-lite/assets/js/jquery.counterup.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('theme/jobboard-free-lite/assets/js/waypoints.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('theme/jobboard-free-lite/assets/js/jasny-bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('theme/jobboard-free-lite/assets/js/bootstrap-select.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('theme/jobboard-free-lite/assets/js/form-validator.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('theme/jobboard-free-lite/assets/js/contact-form-script.js')}}"></script>

    </head>

    <body class="infobar-offcanvas">
        <noscript>
            <style type="text/css">
                #topnav {display:none;}
                #wrapper {display:none;}
            </style>
            <div class="noscriptmsg">
                This site requires JavaScript to be enabled in your browser settings.
            </div>
        </noscript>


        <!-- Header Section Start -->
        <div class="header">
            <!-- Start intro section -->
            <section id="intro">
                <div class="logo-menu">
                    <nav class="navbar navbar-default main-navigation" role="navigation" data-spy="affix" data-offset-top="50">
                        <div class="container">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand logo" href="/"><img width="100px" height="50px" src="{{asset("FemmForce.jpg")}}" alt=""></a>
                            </div>

                            <div class="collapse navbar-collapse" id="navbar">
                                <!-- Start Navigation List -->
                                <ul class="nav navbar-nav">
                                    {{--<li>--}}
                                        {{--<a href="home">Home</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="candidates">Find A Job</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="employers">Employers</a>--}}
                                    {{--</li>--}}
                                    <li>
                                        <a class="active" href="blog">Blog</a>
                                    </li>
                                    <li>
                                        <a href="our-story">Our Story</a>
                                    </li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right float-right">
                                    {{--<li class="left"><a href="post-job.html"><i class="ti-pencil-alt"></i> Post A Job</a></li>--}}
                                    <li class="right"><a href="my-account.html"><i class="ti-lock"></i>  Log In</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Mobile Menu Start -->
                        <ul class="wpb-mobile-menu">
                            {{--<li>--}}
                                {{--<a href="home">Home</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="candidates">Candidates</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="employers">Employers</a>--}}
                            {{--</li>--}}
                            <li>
                                <a class="active" href="blog">Blog</a>
                            </li>
                            <li>
                                <a href="our-story">Our Story</a>
                            </li>
                            {{--<li class="btn-m"><a href="post-job.html"><i class="ti-pencil-alt"></i> Post A Job</a></li>--}}
                            <li class="btn-m"><a href="my-account.html"><i class="ti-lock"></i>  Log In</a></li>
                        </ul>
                        <!-- Mobile Menu End -->
                    </nav>
                </div>
                <!-- Header Section End -->

                @yield('page_content')

                <!-- Footer Section Start -->
                <footer>
                    <!-- Footer Area Start -->
                    <section class="footer-Content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="widget">
                                        <h3 class="block-title">Quick Links</h3>
                                        <ul class="menu">
                                            <li><a href="home">Home</a></li>
                                            {{--<li><a href="candidates">Candidates</a></li>--}}
                                            {{--<li><a href="employers">Employers</a></li>--}}
                                            <li><a href="our-story">Our Story</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="widget">
                                        <h3 class="block-title">Follow Us</h3>
                                        <div class="bottom-social-icons social-icon">
                                            <a class="twitter" href="https://twitter.com/GrayGrids"><i class="ti-twitter-alt"></i></a>
                                            <a class="facebook" href="https://web.facebook.com/GrayGrids"><i class="ti-facebook"></i></a>
                                            <a class="youtube" href="https://youtube.com"><i class="ti-youtube"></i></a>
                                            <a class="dribble" href="https://dribbble.com/GrayGrids"><i class="ti-dribbble"></i></a>
                                            <a class="linkedin" href="https://www.linkedin.com/GrayGrids"><i class="ti-linkedin"></i></a>
                                        </div>
                                        <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/2c66c6c8d8772d84299fa41d8/40be99f924b374bb2361cc9f5.js");</script>
                                        <p>Join our mailing list to stay up to date and get notices about our new releases!</p>
                                        <form class="subscribe-box">
                                            <input type="text" placeholder="Your email">
                                            <input type="submit" class="btn-system" value="Subscribe">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Footer area End -->

                    <!-- Copyright Start  -->
                    <div id="copyright">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="site-info text-center">
                                        <p>Copyright &copy; 2018 FemmForce Inc. all rights Reserved</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Copyright End -->

                </footer>
                <!-- Footer Section End -->
                <!-- Load site level scripts -->
                @yield('includes')
                <!-- End loading site level scripts -->

                <!-- Go To Top Link -->
                <a href="#" class="back-to-top">
                    <i class="ti-arrow-up"></i>
                </a>

                <!-- Main JS  -->
            </section id="intro" class="section-intro">
        </div>

    </body>
</html>