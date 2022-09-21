<div class="widget catageory-widget mb-30 wow fadeInUp">
    <h4 class="widget-title">Kategoriler</h4>
    <ul class="categeory-link">
        @foreach($blogCategory as $category)
            <li><a href="{{route('blogCategory',$category->slug)}}">{{$category->name}}</a></li>
        @endforeach
    </ul>
</div>
