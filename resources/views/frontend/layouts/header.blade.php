<!DOCTYPE html>
<html lang="en">
<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--====== Title ======-->
    <title>@yield('title')</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('fronts/assets')}}/images/favicon.ico" type="image/png">
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('fronts/assets')}}/css/bootstrap.min.css">
    <!--====== FontAwesoem css ======-->
    <link rel="stylesheet" href="{{asset('fronts/assets')}}/fonts/fontawesome/css/all.min.css">
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{asset('fronts/assets')}}/css/magnific-popup.css">
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{asset('fronts/assets')}}/css/slick.css">
    <!--====== Nice-select css ======-->
    <link rel="stylesheet" href="{{asset('fronts/assets')}}/css/nice-select.css">
    <!--====== Jquery ui css ======-->
    <link rel="stylesheet" href="{{asset('fronts/assets')}}/css/jquery-ui.min.css">
    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{asset('fronts/assets')}}/css/animate.css">
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{asset('fronts/assets')}}/css/default.css">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{asset('fronts/assets')}}/css/style.css">
</head>
<body>
<!--====== Start Preloader ======-->
<div class="preloader">
    <div class="lds-ellipsis">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!--====== End Preloader ======-->
<!--====== Search From ======-->
<div class="modal fade" id="search-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <div class="form_group">
                    <input type="text" class="form_control" placeholder="Search here...">
                    <button class="search_btn"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
</div><!--====== Search From ======-->
<!--====== Start Header ======-->
<header class="header-area header-area-v1">
    <div class="header-navigation">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-6 col-lg-2">
                    <div class="site-branding">
                        <div class="brand-logo">
                            <a href="index.html"><img src="{{asset('fronts/assets')}}/images/logo-1.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-8">
                    <div class="nav-menu">
                        <!-- Navbar Close Icon -->
                        <div class="navbar-close">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <nav class="main-menu">
                            <ul>
                                <li class="menu-item"><a href="{{route('homepage')}}">Anasayfa</a></li>
                                <li class="menu-item"><a href="{{route('about')}}">Hakkımızda</a></li>
                                <li class="menu-item "><a href="{{route('service')}}">Hizmetlerimiz</a></li>
                                <li class="menu-item"><a href="{{route('portfolio')}}">Projelerimiz</a></li>
                                <li class="menu-item menu-item-has-children"><a href="#">Sayfalar</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('team')}}">Ekibimiz</a></li>
                                        <li><a href="{{route('faq')}}">SSS</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a target="_blank" href="{{route('blog')}}">Blog</a></li>
                                <li class="menu-item"><a href="{{route('contact')}}">İletişim</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Navbar Toggler -->
                    <div class="navbar-toggler float-end">
                        <span></span><span></span><span></span>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="nav-tools float-end">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#search-modal" class="icon search-icon"><i class="far fa-search"></i></a>
                        <a href="#" class="icon off-menu"><span></span><span></span><span></span></a>
                        <div class="offcanvas-panel">
                            <div class="offcanvas-panel-inner">
                                <div class="panel-logo">
                                    <img src="{{asset('fronts/assets')}}/images/logo-1.png" alt="Image">
                                </div>
                                <div class="about-us">
                                    <h5 class="panel-widget-title">Hakkımızda</h5>
                                    <p>
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore ipsam alias quae cupiditate quas, neque eum magni impedit asperiores ad id sint repudiandae quaerat, omnis commodi consequatur dolore rerum deleniti!
                                    </p>
                                </div>
                                <div class="contact-us">
                                    <h5 class="panel-widget-title">Bizimle İletişime Geçin</h5>
                                    <ul>
                                        <li>
                                            <i class="fal fa-map-marker-alt"></i>
                                            121 King St, Melbourne VIC 3000, Australia.
                                        </li>
                                        <li>
                                            <i class="fal fa-envelope-open"></i>
                                            <a href="mailto:hello@barky.com"> hello@barky.com</a>
                                            <a href="mailto:info@barky.com">info@barky.com</a>
                                        </li>
                                        <li>
                                            <i class="fal fa-phone"></i>
                                            <a href="tel:(312)-895-9800">(312) 895-9800</a>
                                            <a href="tel:(312)-895-9888">(312) 895-9888</a>
                                        </li>
                                    </ul>
                                </div>

                                <a href="#" class="panel-close"><i class="fal fa-times"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--====== End Header ======-->
<section class="breadcrumbs-area bg_cover pt-100 pb-100" style="background-image: url({{asset('fronts/assets')}}/images/bg/breadcrumbs-bg.jpg);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="page-title">
                    <h1>@yield('title')</h1>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="page-breadcrumb">
                    <ul class="breadcrumb">
                        <li class="active"><a href="#">Anasayfa</a></li>
                        <li>@yield('title')</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

