@section('title','Hizmet Detay')
@include('frontend.layouts.header')
<!--====== Start Service-Details Section ======-->
<section class="service-details-section pt-130">
    <div class="container">
        <div class="row service-row flex-md-wrap-reverse flex-sm-wrap-reverse flex-sm-wrap-reverse">
            <div class="col-lg-4">
                <div class="sidebar-widget-area mb-40">
                    @include('frontend.widget.serviceDetailCategory')
                    <div class="widget cta-widget wow fadeInUp">
                        <div class="cta-content bg_cover text-center" style="background-image: url({{asset('fronts/assets')}}/images/cta-1.jpg);">
                            <div class="content">
                                <h3>Need Any
                                    Consultations</h3>
                                <p>But I must explain to you how all this mistaken idea of denouncing</p>
                                <a href="#" class="main-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-details-wrapper wow fadeInUp">
                    <div class="service-content mb-80">
                        <div class="post-thumbnail mb-35">
                            <img src="{{asset($serviceCategory->getServiceContent->image)}}" alt="">
                        </div>
                        <div class="content">
                            <h3>{!! $serviceCategory->getServiceContent->title !!}</h3>
                            <p>{!! $serviceCategory->getServiceContent->text !!}</p>
                        </div>
                        <div class="content-box mt-45">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="block-img bg_cover mb-40" style="background-image: url({{asset('fronts/assets')}}/images/service/single-service-2.jpg);"></div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="content mb-40">
                                        <h4>Planning & Strategy</h4>
                                        <p>Complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness</p>
                                        <ul class="list">
                                            <li>Research beyond the business plan</li>
                                            <li>Marketing options and rates</li>
                                            <li>The ability to turnaround consulting</li>
                                            <li>Customer engagement matters</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-area faq-area-v1 mb-40">
                        <div class="section-title mb-40">
                            <h3 class="mb-15">Frequently Asked Questions</h3>
                            <p>Sed perspiciatis unde omnis iste natus error volup tatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae inventore</p>
                        </div>
                        <div class="accordion faq-accordion" id="accordionFAQ">
                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false">
                                        Design Decisions With Emmett McBain ?
                                    </button>
                                </h4>
                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false">
                                        Podcast Episode Chris Ferdinand Modern ?
                                    </button>
                                </h4>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true">
                                        Responsive Dashboard Angular Material ?
                                    </button>
                                </h4>
                                <div id="collapseThree" class="accordion-collapse show collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false">
                                        Translating Design Wireframes Into
                                    </button>
                                </h4>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Service-Details Section ======-->
<!--====== Start Sponsor Section ======-->
<section class="sponsor-area-v1 pt-90 pb-130">
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
