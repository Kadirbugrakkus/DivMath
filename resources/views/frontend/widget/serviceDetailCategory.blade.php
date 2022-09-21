<div class="widget catageory-widget mb-30 wow fadeInUp">
    <h4 class="widget-title">All Services</h4>
    <ul class="categeory-link">
        @foreach($serviceDetailsCategory as $category)
            <li><a href="{{route('serviceDetails',[$category->slug,$category->getServiceContent->slug])}}">{{$category->title}}</a></li>
        @endforeach
    </ul>
</div>
