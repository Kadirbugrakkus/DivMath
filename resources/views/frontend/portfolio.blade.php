@section('title','Projelerimiz')
@include('frontend.layouts.header')
<!--====== Start Portfolio Section ======-->
<section class="portfolio-area-v1 pt-120 pb-120">
    <div class="container">
        <div class="row products-grid">
            @foreach($portfolio as $p)
            <div class="col-lg-6">
                <div class="portfolio-item wow fadeInUp">
                    <div class="portfolio-img">
                        <img src="{{$p->image}}" alt="">
                    </div>
                    <div class="portfolio-content">
                        <h3 class="title">{{$p->title}}</h3>
                        <p class="cat">{{$p->language}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="button-box text-center wow fadeInUp">
                    <a href="#" class="main-btn">View More Project</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Portfolio Section ======-->
<!--====== Start CTA Section ======-->
<section class="cta-area cta-area-v2">
    <div class="container">
        <div class="row cta-wrapper justify-content-center">
            <div class="col-lg-8">
                <div class="cta-content-box text-center">
                    <div class="section-title mb-40 section-title-white wow fadeInUp">
                        <span class="span">Get  A Quote</span>
                        <h2>Any Consultations For Made Creative
                            Web Design & Development</h2>
                    </div>
                    <div class="button wow fadeInUp">
                        <ul>
                            <li><a href="#" class="main-btn active-btn">Get A Quote</a></li>
                            <li><a href="#" class="main-btn">Explore More</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End CTA Section ======-->
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
