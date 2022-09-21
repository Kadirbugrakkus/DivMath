@section('title','Anasayfa')
    <!DOCTYPE html>
<html lang="tr">
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
    <!--====== FontAwesome css ======-->
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
<body class="home-three">
<!--====== Start Preloader ======-->
<div class="preloader">
    <div class="lds-ellipsis">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div><!--====== End Preloader ======-->
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
<header class="header-area header-area-v3 transparent-header">
    <div class="header-navigation">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-3">
                    <div class="menu-toggle">
                        <span></span><span></span><span></span>
                    </div>
                    <div class="sidebar-sidemenu">
                        <div class="panel-overly"></div>
                        <div class="sidemenu-nav">
                            <a href="#" class="cross-btn"><i class="far fa-times"></i></a>
                            <ul class="sidebar-menu">
                                <li class="menu-item"><a href="{{route('homepage')}}">Anasayfa<i
                                            class=" float-right"></i></a></li>
                                <li class="menu-item"><a href="{{route('about')}}">Hakkımızda</a></li>
                                <li class="menu-item"><a href="{{route('service')}}">Hizmetlerimiz</a></li>
                                <li class="menu-item menu-item-has-children"><a href="{{route('portfolio')}}">Projelerimiz</a>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="#">Sayfalar<i
                                            class="far fa-angle-down float-right"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('team')}}">Ekibimiz</a></li>
                                        <li><a href="{{route('faq')}}">SSS</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children"><a target="_blank"
                                                                                href="{{route('blog')}}">Blog</a></li>
                                <li class="menu-item"><a href="{{route('contact')}}">İletişim</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="site-branding text-center">
                        <div class="brand-logo">
                            <a href="index.html"><img src="{{asset('fronts/assets')}}/images/logo-4.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="nav-tools float-end">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#search-modal" class="icon search-icon"><i
                                class="far fa-search"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--====== End Header ======-->
<!--====== Start banner Section ======-->
<section class="hero-area-v3">
    <div class="shape-box">
        <img src="{{asset('fronts/assets')}}/images/hero/shape-1.png" class="shape shape-one" alt="">
        <div class="shape border-line"></div>
        <img src="{{asset('fronts/assets')}}/images/hero/shape-2.png" class="shape shape-two" alt="">
        <img src="{{asset('fronts/assets')}}/images/hero/shape-3.png" class="shape shape-three" alt="">
    </div>
    <div class="hero-wrapper">
        <div class="hero-left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero-content wow fadeInUp" data-wow-delay=".6s">
                            <h1>CrySetup</h1>
                            <h5 class="line">Made Your Dream Hope Fully</h5>
                            <a href="{{route('about')}}" class="main-btn">Daha Fazlası için</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-right bg_cover"
             style="background-image: url({{asset('fronts/assets')}}/images/bg/hero-three-right-bg.jpg);"></div>
    </div>
</section>
<!--====== End banner Section ======-->
<!--====== Start Features Section ======-->
<section class="features-area-v6 pt-130">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="features-img">
                    <img src="{{asset('fronts/assets')}}/images/about/features-1.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-content-box">
                    @foreach($aData as $data)
                        <div class="features-item mb-40 wow fadeInUp" data-wow-delay=".10s">
                            <div class="icon">
                                <i class="{{$data->icon}}"></i>
                            </div>
                            <div class="info">
                                <h4>{!!Str::limit($data->title,15) !!}</h4>
                                <p>{!! Str::limit($data->content,120) !!}</p>
                                <a href="{{route('about')}}" class="btn-link">Daha Fazla</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Features Section ======-->
<!--====== Start Counter Section ======-->
<section class="counter-area-v1 pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="counter-box mb-40 wow fadeInUp">
                    <h4>Tamamlanan<br>
                        Proje</h4>
                    <h2><span class="sign">+</span><span class="counter">{{$portHome->id}}</span></h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="counter-box mb-40 wow fadeInUp">
                    <h4>Exclusive<br>
                        Team Member</h4>
                    <h2><span class="sign">+</span><span class="counter">834</span></h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="counter-box mb-40 wow fadeInUp">
                    <h4>Awards<br>
                        Winnings</h4>
                    <h2><span class="sign">+</span><span class="counter">506</span></h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="counter-box mb-40 wow fadeInUp">
                    <h4>Memnun<br>
                        Kalan Müşteri</h4>
                    <h2><span class="sign">+</span><span class="counter">983</span></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Counter Section ======-->
<!--====== Start Portfolio Section ======-->
<section class="portfolio-area-v3 pb-120">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="portfolio-item wow fadeInUp">
                    <div class="portfolio-img">
                        <img src="{{asset('fronts/assets')}}/images/portfolio/project-19.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="row">
                    @foreach($pData as $image)
                        <div class="col-lg-6">
                            <div class="portfolio-item mb-30 wow fadeInUp">
                                <div class="portfolio-img">
                                    <img src="{{$image->image}}">
                                </div>
                            </div>
                        </div>
                @endforeach
                <!-- <div class="col-lg-6">
                        <div class="portfolio-item mb-30 wow fadeInUp">
                            <div class="portfolio-img">
                                <img src="{{asset('fronts/assets')}}/images/portfolio/project-21.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="portfolio-item mb-30 wow fadeInUp">
                            <div class="portfolio-img">
                                <img src="{{asset('fronts/assets')}}/images/portfolio/project-22.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="portfolio-item mb-30 wow fadeInUp">
                            <div class="portfolio-img">
                                <img src="{{asset('fronts/assets')}}/images/portfolio/project-23.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Portfolio Section ======-->
<!--====== Start About Section ======-->
<section class="about-area-v2 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="about-content-box">
                    <div class="section-title section-title-left mb-50 wow fadeInLeft">
                        <span class="span">About Agency</span>
                        <h2>Upgrade Your Skills
                            With Our Agency</h2>
                    </div>
                    <div class="box-item d-flex align-items-start mb-45 wow fadeInUp">
                        <div class="icon">
                            <i class="fal fa-tire"></i>
                        </div>
                        <div class="info">
                            <h4>Smart Layouts</h4>
                            <p>Perspiciatis unde omnis iste natus eoluptatem accusantium doloremque laudantium, totam
                                rem aperiam, eaque ipsa quae abllo inventore eritatis quasi architecto beatae vitae
                                dicta</p>
                        </div>
                    </div>
                    <div class="box-item d-flex align-items-start mb-45 wow fadeInUp">
                        <div class="icon">
                            <i class="fal fa-tools"></i>
                        </div>
                        <div class="info">
                            <h4>Support & Maintenance</h4>
                            <p>Perspiciatis unde omnis iste natus eoluptatem accusantium doloremque laudantium, totam
                                rem aperiam, eaque ipsa quae abllo inventore eritatis quasi architecto beatae vitae
                                dicta</p>
                        </div>
                    </div>
                    <a href="#" class="main-btn wow fadeInUp">Read more</a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about-img wow fadeInRight">
                    <img src="{{asset('fronts/assets')}}/images/about/about-5.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section><!--====== End About Section ======-->
<!--====== Start Skill Section ======-->
<section class="skill-area skill-area-v5">
    <div class="skill-wrapper">
        <div class="skill-left bg_cover"
             style="background-image: url({{asset('fronts/assets')}}/images/skill/skill-4.jpg);">
            <div class="play-content text-center">
                <a href="https://www.youtube.com/watch?v=lJc3FU8c2rc" class="video-popup"><i
                        class="fas fa-play"></i></a>
            </div>
        </div>
        <div class="skill-right">
            <div class="container">
                <div class="col-lg-9">
                    <div class="skill-content-box wow fadeInRight">
                        <div class="section-title section-title-left">
                            <span class="span">Best Skills</span>
                            <h2>We Are Very Experience
                                & Professionals</h2>
                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto</p>
                        <div class="skill-list mb-65">
                            <div class="single-bar" style="width: 95%;">
                                <div class="progress-title">
                                    <h5>Design & Development<span>95%</span></h5>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar wow slideInLeft"></div>
                                </div>
                            </div>
                            <div class="single-bar" style="width: 78%;">
                                <div class="progress-title">
                                    <h5>Logo & Branding<span>78%</span></h5>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar wow slideInLeft"></div>
                                </div>
                            </div>
                            <div class="single-bar" style="width: 85%;">
                                <div class="progress-title">
                                    <h5>Marketing<span>85%</span></h5>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar wow slideInLeft"></div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="main-btn">Make Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Skill Section ======-->
<!--====== Start Service Section ======-->
<section class="service-area-v2 pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="experience-img-box wow fadeInLeft">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="service-img img-one">
                                <img src="{{asset('fronts/assets')}}/images/service/service-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="service-img img-two">
                                <img src="{{asset('fronts/assets')}}/images/service/service-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="service-img img-three">
                                <img src="{{asset('fronts/assets')}}/images/service/service-4.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="service-img img-four">
                                <img src="{{asset('fronts/assets')}}/images/service/service-5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="experience-box">
                        <div class="content text-center">
                            <i class="fal fa-plus"></i>
                            <h4>25 Years
                                Experience</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-wrapper">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="service-item service-one text-center wow fadeInUp">
                                <div class="icon">
                                    <i class="fal fa-layer-group"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="service-details.html">Graphics Design</a></h3>
                                    <p>Quis autem vel eums reprh
                                        endert qui in ea voluptat velit esse qua nihil moles</p>
                                    <a href="#" class="btn-link">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="service-item service-two text-center wow fadeInUp">
                                <div class="icon">
                                    <i class="fal fa-shapes"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="service-details.html">Product Design</a></h3>
                                    <p>Quis autem vel eums reprh
                                        endert qui in ea voluptat velit esse qua nihil moles</p>
                                    <a href="#" class="btn-link">Read More</a>
                                </div>
                            </div>
                            <div class="service-item service-three text-center wow fadeInUp">
                                <div class="icon">
                                    <i class="fal fa-laptop-code"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="service-details.html">Development</a></h3>
                                    <p>Quis autem vel eums reprh
                                        endert qui in ea voluptat velit esse qua nihil moles</p>
                                    <a href="#" class="btn-link">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Service Section ======-->
<!--====== Start Testimonial Section ======  (Referans Alınan Müşterilerin bizimle ilgili düşünceleri)
<section class="testimonial-area-v4 pb-130">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="testimonial-wrapper wow fadeInLeft">
                    <div class="testimonial-slider-three">
                        <div class="testimonial-item">
                            <div class="author-thumb-title mb-30">
                                <div class="author-thumb">
                                    <img src="{{asset('fronts/assets')}}/images/thumb-2.jpg" class="thumb" alt="">
                                </div>
                                <div class="author-title">
                                    <h4 class="title">Roger J. Mailloux</h4>
                                    <p class="position">CEO & Founder</p>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <p>Sed perspiciatis unde omnis iste natus error sit voluptate accusanti oloremque
                                    laudantium totam rem aperiam eaqu psa quae nventore veritatis rchitecto beatae vitae
                                    dicta sunt explicabo</p>
                                <div class="quote-icon">
                                    <img src="{{asset('fronts/assets')}}/images/quote-3.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="author-thumb-title mb-30">
                                <div class="author-thumb">
                                    <img src="{{asset('fronts/assets')}}/images/thumb-2.jpg" class="thumb" alt="">
                                </div>
                                <div class="author-title">
                                    <h4 class="title">Roger J. Mailloux</h4>
                                    <p class="position">CEO & Founder</p>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <p>Sed perspiciatis unde omnis iste natus error sit voluptate accusanti oloremque
                                    laudantium totam rem aperiam eaqu psa quae nventore veritatis rchitecto beatae vitae
                                    dicta sunt explicabo</p>
                                <div class="quote-icon">
                                    <img src="{{asset('fronts/assets')}}/images/quote-3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-img wow fadeInRight">
                    <img src="{{asset('fronts/assets')}}/images/testimonial/testimonial-1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
====== End Testimonial Section ======-->
<!--====== Start CTA Section ======-->
<section class="cta-area cta-area-v1 bg_cover pt-140 pb-130"
         style="background-image: url({{asset('fronts/assets')}}/images/bg/cta-bg-1.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="cta-content-box text-center">
                    <div class="play-content">
                        <a href="https://www.youtube.com/watch?v=lJc3FU8c2rc" class="video-popup"><i
                                class="far fa-play"></i></a>
                    </div>
                    <div class="section-title section-title-white wow fadeInUp">
                        <span class="span">Get  A Quote</span>
                        <h2>Any Consultations For Made Creative
                            Web Design & Development</h2>
                    </div>
                    <div class="button wow fadeInUp">
                        <ul>
                            <li><a href="contact.html" class="main-btn active-btn">Get A Quote</a></li>
                            <li><a href="service-details.html" class="main-btn">Explore More</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End CTA Section ======-->
<!--====== Start Blog Section ======-->
<section class="blog-list-v2 pt-130 pb-130">
    <div class="container">
        <div class="row"><!-- sıkınt ınedir  buraya o verinin imageini çekmek istiyorum ancak back ground yolu ile olmuyor bende yukarda src açtım çektm o zman js bozuluyor
        tamam bakalım backgroun dyeri şurası mı yeap
        -->
            <div class="col-lg-7">
                @foreach($blogHome as $recent)
                    <div class="blog-post-item wow fadeInUp">
                        <div class="post-thumbnail">
                            <!--
                            oldu gibi ? aynen knk bir de bir şey sorcam sor kanka sordum vjkndfv
                            oraya 4 adet görsel çektim ama nedense makinede yıkanmız kazak gibi oldular örjinaldeki gibi değiller neden öyle oldu kismin

                            resmin oldugu dosyayı açsana

                             -->
                            <div class="post-bg bg_cover"
                                 style="background-image: url('{{$recent->image}}');padding-top: 36.56%;display: block;background-size: cover;"></div>
                        </div>
                        <div class="entry-content">
                            <div class="post-meta">
                                <ul>
                                    <li><span><i class="fas fa-th-list"></i><a
                                                href="#">Kategori: {{$recent->getCategory->name}}</a></span></li>
                                    <li><span><i class="far fa-calendar-alt"></i><a
                                                href="#">{{$recent->created_at->diffForHumans()}}</a></span></li>
                                    <li><span><i class="far fa-user-edit"></i><a href="#">{{$recent->getAuthor->name}}</a></span>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="title"><a
                                    href="{{route('blogDetail',[$recent->getCategory->slug,$recent->slug])}}">{!! Str::limit($recent->title,50) !!}</a>
                            </h3>
                            <a href="{{route('blogDetail',[$recent->getCategory->slug,$recent->slug])}}"
                               class="btn-link">Daha Fazla</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-lg-5">
                <div class="map-box wow fadeInUp">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3530.931336767301!2d36.483099059236885!3d40.33181711094046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407db9ade22bd097%3A0x2dba825dbfe6453!2zR09QIMOcTsSwVkVSU8SwVEVTxLAgTcOcSEVORMSwU0zEsEsgVkUgRE_EnkEgQsSwTMSwTUxFUsSwIEZBS8OcTFRFU8Sw!5e0!3m2!1str!2str!4v1648732453431!5m2!1str!2str"
                        width="600" height="450" style="border:0;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="email-box wow fadeInUp">
                    <a href="mailto:support@gmail.com">
                        <div class="email-wrapper text-center">
                            <i class="fal fa-envelope-open"></i>
                            <h3>E-mail Gönderin</h3>
                            <p>crysetup@gmail.com</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Blog Section ======-->
<!--====== Start Footer Area ======-->
<footer class="footer-area-v1 footer-area-v3 pt-95">
    <div class="container">
        <div class="footer-widget pb-40">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget about-widget mb-50 wow fadeInUp">
                        <img src="{{asset('fronts/assets')}}/images/logo-4.png" alt="">
                        <p>Quis autem vel eum iure reprehend
                            erit quiin voluptate velit esse quam
                            nihil molestiae consequatur velllu
                            m qui dolorem eum fugiat quo</p>
                        <ul class="social-link">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget quick-link-widget mb-50 wow fadeInUp">
                        <h4 class="widget-title">Quick Links</h4>
                        <ul class="widget-link">
                            <li><a href="#">Latest Services</a></li>
                            <li><a href="#">Popular News</a></li>
                            <li><a href="#">Marketing Strategy</a></li>
                            <li><a href="#">Meet Our Team</a></li>
                            <li><a href="#">Latest Projects</a></li>
                            <li><a href="#">Setting & Privecy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget newsletter-widget mb-50 wow fadeInUp">
                        <h4 class="widget-title">Newsletters</h4>
                        <p>We denounce with righteous indign
                            ation and dislike men who are</p>
                        <form>
                            <div class="form_group">
                                <input type="email" class="form_control" placeholder="Enter Your Email" name="email">
                            </div>
                            <div class="form_group">
                                <button class="main-btn">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget instagra-widget mb-50 wow fadeInUp">
                        <h4 class="widget-title">Instagram</h4>
                        <ul class="instagram-list">
                            <li><a href="#"><img src="{{asset('fronts/assets')}}/images/thumb-3.jpg" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('fronts/assets')}}/images/thumb-4.jpg" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('fronts/assets')}}/images/thumb-5.jpg" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('fronts/assets')}}/images/thumb-6.jpg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-text text-center">
            <p>Copyright &copy; {{date('Y')}} <span>CrySetup</span>. All Rights Reserved</p>
        </div>
    </div>
</footer>
<!--====== End Footer Area ======-->
<!--====== back-to-top ======-->
<a href="#" class="back-to-top"><i class="fas fa-angle-up"></i></a>
<!--====== Jquery js ======-->
<script src="{{asset('fronts/assets')}}/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="{{asset('fronts/assets')}}/js/vendor/jquery-3.6.0.min.js"></script>
<!--====== Bootstrap js ======-->
<script src="{{asset('fronts/assets')}}/js/popper.min.js"></script>
<script src="{{asset('fronts/assets')}}/js/bootstrap.min.js"></script>
<!--====== Slick js ======-->
<script src="{{asset('fronts/assets')}}/js/slick.min.js"></script>
<!--====== Magnific Popup js ======-->
<script src="{{asset('fronts/assets')}}/js/jquery.magnific-popup.min.js"></script>
<!--====== Isotope js ======-->
<script src="{{asset('fronts/assets')}}/js/isotope.pkgd.min.js"></script>
<!--====== Imagesloaded js ======-->
<script src="{{asset('fronts/assets')}}/js/imagesloaded.pkgd.min.js"></script>
<!--====== counterup js ======-->
<script src="{{asset('fronts/assets')}}/js/jquery.counterup.min.js"></script>
<!--====== waypoints js ======-->
<script src="{{asset('fronts/assets')}}/js/jquery.waypoints.min.js"></script>
<!--====== Nice-select js ======-->
<script src="{{asset('fronts/assets')}}/js/jquery.nice-select.min.js"></script>
<!--====== Nice-number js ======-->
<script src="{{asset('fronts/assets')}}/js/jquery.nice-number.min.js"></script>
<!--====== Nice-select js ======-->
<script src="{{asset('fronts/assets')}}/js/jquery-ui.min.js"></script>
<!--====== Wow js ======-->
<script src="{{asset('fronts/assets')}}/js/wow.min.js"></script>
<!--====== Main js ======-->
<script src="{{asset('fronts/assets')}}/js/main.js"></script>
</body>
</html>

