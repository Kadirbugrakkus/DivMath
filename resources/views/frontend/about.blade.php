@section('title','Hakkımızda')
@include('Frontend.layouts.header')
<!--====== Start breadcrumbs Section ======-->
<!--====== End breadcrumbs Section ======-->
<!--====== Start Features Section ======-->
<section class="features-area-v3 pt-120 pb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center mb-80 wow fadeInUp">
                    <span class="span">Biz Ne Yaparız</span>
                    <h2>Profesyonel Hizmet Ve Destek</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($aboutData as $a)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="features-item mb-40 wow fadeInUp">
                    <div class="icon">
                        <i class="{{$a->icon}}"></i>
                    </div>
                    <div class="info">
                        <h4>{!! Str::limit($a->title,15) !!}</h4>
                        <p>{!! Str::limit($a->content,120) !!}</p>
                        <a href="{{route('service')}}" class="btn-link">Daha Fazla</a>
                    </div>
                </div>
            </div>
        @endforeach
           <!-- <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="features-item mb-40 wow fadeInUp">
                    <div class="icon">
                        <i class="far fa-laptop-code"></i>
                    </div>
                    <div class="info">
                        <h4>Web Development</h4>
                        <p>But I must explain to how all this mist
                            idea denouncing pleasure and praising
                            was born and will give complete</p>
                        <a href="service-1.html" class="btn-link">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="features-item mb-40 wow fadeInUp">
                    <div class="icon">
                        <i class="far fa-bullhorn"></i>
                    </div>
                    <div class="info">
                        <h4>Marketing Strategy</h4>
                        <p>But I must explain to how all this mist
                            idea denouncing pleasure and praising
                            was born and will give complete</p>
                        <a href="service-details.html" class="btn-link">Read More</a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!--====== End Features Section ======-->
<!--====== Start Features Section ======-->
<section class="features-area-v2 light-bg pt-120 pb-130">
    <div class="features-bg bg_cover" style="background-image: url({{asset('fronts/assets')}}/images/bg/features-bg-3.jpg);"></div>
    <div class="container">
        <div class="row">
            <div class="offset-lg-6 col-lg-6">
                <div class="features-content-box">
                    <div class="section-title section-title-left wow fadeInLeft">
                        <span class="span">Biz Kimiz</span>
                        <h2>Yeniliğe Açık Ve Sürekli Gelişen</h2>
                    </div>
                    <h5>Sed perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium totam rem aperiam
                        ue ipsa quae ab illo inventore veritatis</h5>
                    <ul class="icon-list mb-50 wow fadeInUp">
                        <li>Inspired Design Decisions With Otto Storch Ideas</li>
                        <li>Announcing Smashing Online Workshops</li>
                        <li>How Should Designers Learn To Code Terminal</li>
                    </ul>
                    <a href="service-1.html" class="main-btn wow fadeInUp">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Features Section ======-->
<!--====== Start Skill Section ======-->
<section class="skill-area skill-area-v2 light-bg pt-120 pb-130">
    <div class="skill-bg bg_cover" style="background-image: url({{asset('fronts/assets')}}/images/skill/skill-2.jpg);"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="skill-content-box wow fadeInUp">
                    <div class="section-title section-title-left">
                        <span class="span">Best Skills</span>
                        <h2>We Are Very Experience
                            & Professionals</h2>
                    </div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
                    <div class="skill-list">
                        <div class="single-bar" style="width: 95%;">
                            <div class="progress-title">
                                <h5>Creative Design<span>95%</span></h5>
                            </div>
                            <div class="progress">
                                <div class="progress-bar wow slideInLeft"></div>
                            </div>
                        </div>
                        <div class="single-bar" style="width: 78%;">
                            <div class="progress-title">
                                <h5>Product Engineering<span>78%</span></h5>
                            </div>
                            <div class="progress">
                                <div class="progress-bar wow slideInLeft"  data-wow-delay="2s"></div>
                            </div>
                        </div>
                        <div class="single-bar" style="width: 85%;">
                            <div class="progress-title">
                                <h5>Marketing Strategy<span>85%</span></h5>
                            </div>
                            <div class="progress">
                                <div class="progress-bar wow slideInLeft"></div>
                            </div>
                        </div>
                        <div class="single-bar" style="width: 93%;">
                            <div class="progress-title">
                                <h5>Support & Tips<span>93%</span></h5>
                            </div>
                            <div class="progress">
                                <div class="progress-bar wow slideInLeft"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Skill Section ======-->
<!--====== Start Team Section ======-->
<section class="team-area-v1-about pt-120 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center mb-65 wow fadeInUp">
                    <span class="span">Meet The Team</span>
                    <h2>Professional Creative
                        Team Members</h2>
                </div>
            </div>
        </div>
        <div class="row g-0">
            @foreach($aboutTeam as $team)
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="team-item wow fadeInUp">
                    <div class="team-img">
                        <img src="{{asset($team->image)}}" alt="images">
                        <div class="team-overlay">
                            <div class="team-content">
                                <h4><a href="team.html">{{$team->name}}</a></h4>
                                <p class="position">{{$team->title}}</p>
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fab fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--====== End Team Section ======-->
<!--====== Start Testimonial Section ======-->
<section class="testimonial-area-v2">
    <div class="testimonial-wrapper">
        <div class="testimonial-slider-two wow fadeInUp">
            <div class="testimonial-item">
                <div class="author-thumb-title">
                    <div class="author-thumb">
                        <img src="{{asset('fronts/assets')}}/images/testimonial/thumb-1.jpg" class="thumb" alt="">
                        <div class="quote-icon">
                            <img src="{{asset('fronts/assets')}}/images/quote.png" alt="">
                        </div>
                    </div>
                    <div class="author-title">
                        <h4 class="title">David Hukkany</h4>
                        <p class="position">Web Developer</p>
                    </div>
                </div>
                <div class="testimonial-content">
                    <p>But must explain to you how this mistaken
                        idea denouncing pleasure and praising pain
                        was born and I will give you a complete acc
                        ount of the system and expound the</p>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                    </ul>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="author-thumb-title">
                    <div class="author-thumb">
                        <img src="{{asset('fronts/assets')}}/images/testimonial/thumb-2.jpg" class="thumb" alt="">
                        <div class="quote-icon">
                            <img src="{{asset('fronts/assets')}}/images/quote.png" alt="">
                        </div>
                    </div>
                    <div class="author-title">
                        <h4 class="title">David Hukkany</h4>
                        <p class="position">Web Developer</p>
                    </div>
                </div>
                <div class="testimonial-content">
                    <p>But must explain to you how this mistaken
                        idea denouncing pleasure and praising pain
                        was born and I will give you a complete acc
                        ount of the system and expound the</p>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                    </ul>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="author-thumb-title">
                    <div class="author-thumb">
                        <img src="{{asset('fronts/assets')}}/images/testimonial/thumb-3.jpg" class="thumb" alt="">
                        <div class="quote-icon">
                            <img src="{{asset('fronts/assets')}}/images/quote.png" alt="">
                        </div>
                    </div>
                    <div class="author-title">
                        <h4 class="title">David Hukkany</h4>
                        <p class="position">Web Developer</p>
                    </div>
                </div>
                <div class="testimonial-content">
                    <p>But must explain to you how this mistaken
                        idea denouncing pleasure and praising pain
                        was born and I will give you a complete acc
                        ount of the system and expound the</p>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                    </ul>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="author-thumb-title">
                    <div class="author-thumb">
                        <img src="{{asset('fronts/assets')}}/images/testimonial/thumb-2.jpg" class="thumb" alt="">
                        <div class="quote-icon">
                            <img src="{{asset('fronts/assets')}}/images/quote.png" alt="">
                        </div>
                    </div>
                    <div class="author-title">
                        <h4 class="title">David Hukkany</h4>
                        <p class="position">Web Developer</p>
                    </div>
                </div>
                <div class="testimonial-content">
                    <p>But must explain to you how this mistaken
                        idea denouncing pleasure and praising pain
                        was born and I will give you a complete acc
                        ount of the system and expound the</p>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                    </ul>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="author-thumb-title">
                    <div class="author-thumb">
                        <img src="{{asset('fronts/assets')}}/images/thumb-1.jpg" class="thumb" alt="">
                        <div class="quote-icon">
                            <img src="{{asset('fronts/assets')}}/images/quote.png" alt="">
                        </div>
                    </div>
                    <div class="author-title">
                        <h4 class="title">David Hukkany</h4>
                        <p class="position">Web Developer</p>
                    </div>
                </div>
                <div class="testimonial-content">
                    <p>But must explain to you how this mistaken
                        idea denouncing pleasure and praising pain
                        was born and I will give you a complete acc
                        ount of the system and expound the</p>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                    </ul>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="author-thumb-title">
                    <div class="author-thumb">
                        <img src="{{asset('fronts/assets')}}/images/testimonial/thumb-3.jpg" class="thumb" alt="">
                        <div class="quote-icon">
                            <img src="{{asset('fronts/assets')}}/images/quote.png" alt="">
                        </div>
                    </div>
                    <div class="author-title">
                        <h4 class="title">David Hukkany</h4>
                        <p class="position">Web Developer</p>
                    </div>
                </div>
                <div class="testimonial-content">
                    <p>But must explain to you how this mistaken
                        idea denouncing pleasure and praising pain
                        was born and I will give you a complete acc
                        ount of the system and expound the</p>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Testimonial Section ======-->
<!--====== Start Sponsor Section ======-->
<section class="sponsor-area-v1 pt-130 pb-125">
    <div class="container">
        <div class="sponsor-slide-one wow fadeInUp">
            <div class="single-sponsor">
                <img src="{{asset('fronts/assets')}}/images/sponsor/sponsor-1.png" alt="">
            </div>
            <div class="single-sponsor">
                <img src="{{asset('fronts/assets')}}/images/sponsor/sponsor-2.png" alt="">
            </div>
            <div class="single-sponsor">
                <img src="{{asset('fronts/assets')}}/images/sponsor/sponsor-3.png" alt="">
            </div>
            <div class="single-sponsor">
                <img src="{{asset('fronts/assets')}}/images/sponsor/sponsor-4.png" alt="">
            </div>
            <div class="single-sponsor">
                <img src="{{asset('fronts/assets')}}/images/sponsor/sponsor-5.png" alt="">
            </div>
            <div class="single-sponsor">
                <img src="{{asset('fronts/assets')}}/images/sponsor/sponsor-2.png" alt="">
            </div>
        </div>
    </div>
</section>
<!--====== End Sponsor Section ======-->
@include('frontend.layouts.footer')
