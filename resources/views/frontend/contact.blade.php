@section('title','İletişim')
@include('frontend.layouts.header')


<!--====== Start Contact-info Section ======-->
<section class="contact-info-section pt-120 pb-75">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="info-content-box mb-45 wow fadeInLeft">
                    <div class="section-title section-title-left">
                        <span class="span">Bizimle Temasa Geçin</span>
                        <h2>Fikriniz Konusunda Yardıma mı İhtiyacınız Var!</h2>
                    </div>
                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                        was </p>
                    <div class="info-item d-flex">
                        <div class="icon mr-30">
                            <i class="far fa-phone"></i>
                        </div>
                        <div class="info">
                            <span>Telefon Numarası</span>
                            <h5><a href="tel:+0123456789">+90 (543) 738 1245</a></h5>
                        </div>
                    </div>
                    <div class="info-item d-flex">
                        <div class="icon mr-30">
                            <i class="fal fa-envelope-open"></i>
                        </div>
                        <div class="info">
                            <span>E-mail Adresi</span>
                            <h5><a href="mailto:support@gmail.com">crysetup@gmail.com</a></h5>
                        </div>
                    </div>
                    <div class="info-item d-flex">
                        <div class="icon mr-30">
                            <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="info">
                            <span>Konum</span>
                            <h5>TOGÜ Kampüs Tokat, Türkiye</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="map-box mb-45 wow fadeInRight">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3530.931336767301!2d36.483099059236885!3d40.33181711094046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407db9ade22bd097%3A0x2dba825dbfe6453!2zR09QIMOcTsSwVkVSU8SwVEVTxLAgTcOcSEVORMSwU0zEsEsgVkUgRE_EnkEgQsSwTMSwTUxFUsSwIEZBS8OcTFRFU8Sw!5e0!3m2!1str!2str!4v1648732453431!5m2!1str!2str"
                        width="600" height="450" style="border:0;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Contact-info Section ======-->
<!--====== Start contact-form-section ======-->
<section class="contact-form-section pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center mb-60 wow fadeInUp">
                    <span class="span">Teklif Alın</span>
                    <h2>Destek Ve Geri Dönüş İçin</h2>
                </div>
            </div>
        </div>
        <div class="contact-wrapper row justify-content-center wow fadeInUp">
            <div class="col-lg-8">
                <div class="contact-respond">
                    <form method="post" action="{{route('contact.post')}}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form_group">
                                    <input type="text" class="form_control" placeholder="Adınız Ve Soyadınız" value="{{old('name')}}"
                                           name="name" required>
                                    <i class="far fa-user-alt"></i>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_group">
                                    <input type="text" class="form_control" value="{{old('phone')}}" placeholder="(5xx)-xxx-xxxx " name="phone"
                                           required>
                                    <i class="far fa-phone"></i>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form_group">
                                    <input type="email" class="form_control" value="{{old('email')}}" placeholder="E-Mail Adresiniz" name="email"
                                           required>
                                    <i class="far fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form_group">
                                    <textarea class="form_control" value="{{old('message')}}" placeholder="Mesajınız.." name="message" required></textarea>
                                    <i class="far fa-pencil-alt"></i>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form_group">
                                    <button type="submit" class="main-btn">Gönder</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End contact-form-section ======-->
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
@include('sweetalert::alert')
@include('frontend.layouts.footer')
