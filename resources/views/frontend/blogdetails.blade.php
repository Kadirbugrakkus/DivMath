@section('title',Str::Limit($blogContent->title,20))
@include('frontend.layouts.header')
<!--====== Start Blog-Details Section ======-->
<section class="blog-details-section pt-120 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details-wrapper wow fadeInUp">
                    <div class="blog-post-item">
                        <div class="post-thumbnail">
                            <img src="{{asset($blogContent->image)}}" alt="">
                        </div>
                        <div class="entry-content">
                            <div class="post-meta">
                                <ul>
                                    <li><span><i class="fas fa-th-list"></i><a href="#">Kategori: {{$blogContent->getCategory->name}}</a></span></li>
                                    <li><span><i class="far fa-user-edit"></i><a href="#">{{$blogContent->getAuthor->name}}</a></span></li>
                                    <li><span><i class="far fa-calendar-alt"></i><a href="#">{{$blogContent->created_at->diffForHumans()}}</a></span></li>
                                    <!-- <li><span><i class="far fa-comments"></i><a href="#">Comments (05)</a></span></li> -->
                                </ul>
                            </div>
                            <h3>{{$blogContent->title}}</h3>
                            <p>{!! $blogContent->content !!}</p>
                            <blockquote class="blockquote">
                                <h4>Smashing Podcast Episode With Chris Ferdinandi
                                    Are Modern Best Practices Bad For The Understanding Client Create A Responsive Dashboard</h4>
                                <h5>Kevin S. Shepard</h5>
                            </blockquote>
                        </div>
                    </div>
                    <div class="post-nav-item row">
                        <div class="col-lg-6">
                            <a href="single-portfolio.html" class="post-item bg_cover" style="background-image: url({{asset('fronts/assets')}}/images/portfolio/single-portfolio-5.jpg);">
                                <div class="content">
                                    <h4>Podcast Episode 21 With Chris Ferdinandi Are Modern</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <a href="single-portfolio.html" class="post-item bg_cover" style="background-image: url({{asset('fronts/assets')}}/images/portfolio/single-portfolio-6.jpg);">
                                <div class="content">
                                    <h4>Understand Client-Side Graph
                                        Apollo-Client In React Apps</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="comments-area mb-60">
                        <h4 class="comments-title">Comments</h4>
                        <ul class="comments-list">
                            <li class="comment">
                                <div class="comment-avatar">
                                    <img src="{{asset('fronts/assets')}}/images/blog/comment-1.jpg" alt="">
                                </div>
                                <div class="comment-wrap">
                                    <div class="comment-author-content">
                                        <span class="author-name">John F. Medina <span class="date">22 Mar, 2021</span></span>
                                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pawas born and I will give you a complete account</p>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                </div>
                            </li>
                            <li class="comment">
                                <div class="comment-avatar">
                                    <img src="{{asset('fronts/assets')}}/images/blog/comment-2.jpg" alt="">
                                </div>
                                <div class="comment-wrap">
                                    <div class="comment-author-content">
                                        <span class="author-name">Jeffrey T. Kelly<span class="date">22 Mar, 2021</span></span>
                                        <p>Again is there anyone who loves or pursues or desires to obtain paiits ecause it is pain, but because occasionally circumstances occur in which</p>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                </div>
                            </li>
                            <li class="comment">
                                <div class="comment-avatar">
                                    <img src="{{asset('fronts/assets')}}/images/blog/comment-3.jpg" alt="">
                                </div>
                                <div class="comment-wrap">
                                    <div class="comment-author-content">
                                        <span class="author-name">Richard B. Zellmer<span class="date">22 Mar, 2021</span></span>
                                        <p>Harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime</p>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="comments-respond mb-50">
                        <h4 class="comments-heading">Leav A Comments</h4>
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form_group">
                                        <input type="text" class="form_control" placeholder="Your Full Name" name="name" required>
                                        <i class="far fa-user-alt"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_group">
                                        <input type="email" class="form_control" placeholder="Your Email " name="email" required>
                                        <i class="far fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_group">
                                        <textarea class="form_control" placeholder="Write Message" name="message"></textarea>
                                        <i class="far fa-pencil-alt"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_group">
                                        <button class="main-btn">Send Reply</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
                    <div class="widget about-widget mb-30 wow fadeInUp">
                        <div class="about-content text-center">
                            <div class="thumb">
                                <img src="{{asset('fronts/assets')}}/images/admin-1.jpg" alt="">
                            </div>
                            <div class="content">
                                <h4>{{$blogContent->getAuthor->name}}</h4>
                                <p class="position">Author</p>
                                <p>İki kişinin bildiği sır değildir yeğen..</p>
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
<!--====== End Blog-Details Section ======-->
@include('frontend.layouts.footer')
