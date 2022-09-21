@section('title','Hizmetlerimiz')
@include('frontend.layouts.header')
<section class="testimonial-area-v2" style="margin-top:150px;margin-bottom:150px;">
    <div class="testimonial-wrapper">
        <div class="testimonial-slider-two wow fadeInUp">
            @foreach($serviceCategory as $category)
                <div class="testimonial-item">
                    <a class="card  pt-5 " style="width: 18rem;margin:auto;" href="{{route('serviceDetails',[$category->slug,$category->getServiceContent->slug])}}">
                        <div class=" icondiv">
                                <i class="{{$category->icon}} iconcard"></i>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">{{$category->title}}</h4>
                            <button href="services/details" style="position:center" class="btn btn-danger buttoncard mt-5">Daha Fazla</button>
                        </div>
                        <div class="container " style="margin-left: 60px;">
                            <div class="row">
                                <div class="buttondiv">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!--====== Start Features Section ======-->
<section class="features-area-v4 dark-bg pt-120 pb-120">
    <div class="features-bg bg_cover" style="background-image: url({{asset('fronts/assets')}}/images/bg/features-bg-4.jpg);"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="features-content-box">
                    <div class="section-title section-title-left section-title-white mb-50 wow fadeInUp">
                        <span class="span">What We Do</span>
                        <h2>Upgrade Your Skills
                            With Our Agency</h2>
                    </div>
                    <div class="features-item d-flex mb-40 wow fadeInUp">
                        <div class="icon">
                            <i class="fal fa-tire"></i>
                        </div>
                        <div class="info">
                            <h4>Smart Layouts</h4>
                            <p>Perspiciatis unde omnis iste natus eoluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae abllo inventore eritatis quasi architecto beatae vitae dicta</p>
                        </div>
                    </div>
                    <div class="features-item d-flex mb-40 wow fadeInUp">
                        <div class="icon">
                            <i class="fal fa-tools"></i>
                        </div>
                        <div class="info">
                            <h4>Support & Maintenance</h4>
                            <p>Perspiciatis unde omnis iste natus eoluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae abllo inventore eritatis quasi architecto beatae vitae dicta</p>
                        </div>
                    </div>
                    <a href="service-details.html" class="main-btn wow fadeInUp">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Features Section ======-->
<!--====== Start Skill Section ======-->
<section class="skill-area skill-area-v3 pt-120 pb-120 light-bg">
    <div class="skill-bg bg_cover" style="background-image: url({{asset('fronts/assets')}}/images/skill/skill-3.jpg);"></div>
    <div class="container">
        <div class="row">
            <div class="offset-lg-6 col-lg-6">
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
                                <div class="progress-bar wow slideInLeft"></div>
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
<!--====== Start Counter Section ======-->
<section class="counter-area-v1 pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="counter-box mb-40 wow fadeInUp">
                    <h4>Project <br>
                        Complate</h4>
                    <h2><span class="sign">+</span><span class="counter">256</span></h2>
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
                    <h4>Satified<br>
                        Like People</h4>
                    <h2><span class="sign">+</span><span class="counter">983</span></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Counter Section ======-->
<!--====== Start CTA Section ======-->
<section class="cta-area cta-area-v1 bg_cover pt-140 pb-130" style="background-image: url({{asset('fronts/assets')}}/images/bg/cta-bg-1.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="cta-content-box text-center">
                    <div class="play-content">
                        <a href="https://www.youtube.com/watch?v=lJc3FU8c2rc" class="video-popup"><i class="far fa-play"></i></a>
                    </div>
                    <div class="section-title section-title-white wow fadeInUp">
                        <span class="span">Get A Quote</span>
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
</section>
<!--====== End CTA Section ======-->
@include('frontend.layouts.footer')
