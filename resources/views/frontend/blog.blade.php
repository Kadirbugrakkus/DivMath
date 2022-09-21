@section('title','Blog')
@include('frontend.layouts.header')
<!--====== Start Blog Section ======-->
<section class="blog-standard-section pt-130 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-standard-wrapper mb-50">
                    @include('frontend.widget.blogContentList')
                    <div class="fidda-pagenitation wow fadeInUp">
                        {{$blogContent->links('pagination::bootstrap-4')}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-widget-area mb-50">
                    <div class="widget search-widget mb-30 wow fadeInUp">
                        <form>
                            <div class="form_group">
                                <input type="search" class="form_control" placeholder="Search here" name="search">
                                <button class="search-btn"><i class="far fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    @include('frontend.widget.blogCategory')
                    @include('frontend.widget.blogRecent')
                    <div class="widget widget-tag-cloud mb-30 wow fadeInUp">
                        <h4 class="widget-title">Popular Tags</h4>
                        <a href="#">Business</a>
                        <a href="#">Popular</a>
                        <a href="#">Business</a>
                        <a href="#">Design</a>
                        <a href="#">Devolper</a>
                        <a href="#">Business</a>
                    </div>
                    <div class="widget about-widget mb-30">
                        <div class="about-content text-center wow fadeInUp">
                            <div class="thumb">
                                <img src="{{asset('fronts/assets')}}/images/admin-1.jpg" alt="">
                            </div>
                            <div class="content">
                                <h4>Brandon Johnston</h4>
                                <p class="position">Author</p>
                                <p>Vero eos et accusamus et iustoys odio dignissimos ducimu blanditiis praesentium voluptatum</p>
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="widget cta-widget wow fadeInUp">
                        <div class="cta-content bg_cover text-center" style="background-image: url({{asset('fronts/assets')}}/images/cta-1.jpg);">
                            <div class="content">
                                <h3>Yardıma mı İhtiyacınız var ?</h3>
                                <p>Bizimle iletişime geçerek, alanında uzman arkadaşlarımızdan destek alabilirsiniz..</p>
                                <a href="{{route('contact')}}" class="main-btn">İletilime Geç</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Blog Section ======-->
@include('frontend.layouts.footer')
