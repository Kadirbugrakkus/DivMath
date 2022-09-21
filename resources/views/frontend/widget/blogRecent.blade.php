<div class="widget widget-recent-post mb-30 wow fadeInUp">
    <h4 class="widget-title">Öne Çıkan Gönderiler</h4>
    <ul class="recent-post-widget">
        @foreach($blogRecent as $recent)
            <li class="post-thumbnail-content">
                <img src="{{$recent->image}}" alt="">
                <div class="post-title-date">
                    <span class="posted-on"><i class="fas fa-calendar-alt"></i>
                        <a>{{$recent->created_at->diffForHumans()}}</a></span>
                    <h6><a href="{{route('blogDetail',[$recent->getCategory->slug,$recent->slug])}}">{!! Str::limit($recent->title,35) !!}</a></h6>
                </div>
            </li>
        @endforeach
    </ul>
</div>
