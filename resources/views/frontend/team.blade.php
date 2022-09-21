@section('title','Ekibimiz')
@include('frontend.layouts.header')
<!--====== Start Team Section ======-->
<section class="team-area-v1 pt-130 pb-90">
    <div class="container">
        <div class="row">
            @foreach($teams as $team)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="team-item mb-40 wow fadeInUp">
                    <div class="team-img">
                        <img src="{{$team->image}}" alt="images" style="width: 370px;height: 415px;">
                        <div class="team-overlay">
                            <div class="team-content">
                                <h4><a href="team.html">{{$team->name}}</a></h4>
                                <p class="position">{{$team->title}}</p>
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
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
<!--====== Start Sponsor Section ======-->
<section class="sponsor-area-v1 pt-130 pb-130">
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
