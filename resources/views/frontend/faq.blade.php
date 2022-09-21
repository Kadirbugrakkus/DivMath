@section('title','Sıkça Sorulan Sorular')
@include('frontend.layouts.header')
<!--====== Start Faq Section ======-->
<section class="faq-area faq-area-v2 pt-120 pb-110">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center mb-70 wow fadeInUp">
                    <span class="span">Merak Edilenler</span>
                    <h2>Sorulması Gereken Soruları Cevaplıyoruz</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="accordion faq-accordion" id="accordionFAQ">
                    @foreach($faq as $faqs)
                    <div class="accordion-item wow fadeInUp">
                        <h4 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-{{$faqs->faq_id}}" aria-expanded="false">
                                {{$faqs->question}}
                            </button>
                        </h4>
                        <div id="collapse-{{$faqs->faq_id}}" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                <p>{{$faqs->answer}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Faq Section ======-->
<!--====== Start Sponsor Section ======-->
<section class="sponsor-area-v1 pt-130 pb-130 light-bg">
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
