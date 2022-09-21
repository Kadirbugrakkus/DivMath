@foreach($blogContent as $content)
<div class="blog-post-item mb-60 wow fadeInUp">
    <div class="post-thumbnail">
        <a><img src="{{asset($content->image)}}" alt=""></a>
    </div>
    <div class="entry-content">
        <div class="post-meta">
            <ul>
                <li><span><i class="fas fa-th-list"></i><a href="#">Kategori: {{$content->getCategory->name}}</a></span></li>
                <li><span><i class="far fa-user-edit"></i><a href="#">{{$content->author}}</a></span></li>
                <li><span><i class="far fa-calendar-alt"></i><a href="#">{{$content->created_at->diffForHumans()}}</a></span></li>
                <!-- <li><span><i class="far fa-comments"></i><a href="#">Comments (05)</a></span></li> -->
            </ul>
        </div>
        <h3 class="title"><a>{!! Str::limit($content->title,50) !!}</a></h3>
        <p>{!! Str::limit($content->content,150) !!}</p>
        <a href="{{route('blogDetail',[$content->getCategory->slug,$content->slug])}}" class="main-btn">Daha Fazlası</a>
    </div>
</div>
@endforeach
