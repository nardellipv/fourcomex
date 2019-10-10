<div class="cell-md-4 offset-top-88 offset-md-top-0">
    <div class="range">
        <div class="cell-sm-6 cell-md-12 aside-list-group">
            <div class="list-item">
                <h5>Últimas Noticias</h5>
                <hr>
                <ul class="post-list offset-top-22">
                    @foreach($lastPosts as $lastPost)
                        <li>
                            <article class="post-recent">
                                <div class="post-header">
                                    <h6><a href="{{ route('blog.post', $lastPost->slug) }}">{{ $lastPost->title }}</a></h6>
                                </div>
                                <div class="post-meta"></div>
                                <time datetime="2016-05-28">{{ $lastPost->created_at->format('d-m-Y') }}</time>
                            </article>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        {{--<div class="cell-sm-6 cell-md-12 aside-list-group">--}}
        {{--<div class="list-item">--}}
        {{--<h5>Categories</h5>--}}
        {{--<hr>--}}
        {{--<ul class="list-marked-variant-2 list-marked-gray">--}}
        {{--<li><a href="#">Ice Maker Repair</a></li>--}}
        {{--<li><a href="#">Stove Repair</a></li>--}}
        {{--<li><a href="#">Appliance Parts</a></li>--}}
        {{--<li><a href="#">Microwave Repair</a></li>--}}
        {{--<li><a href="#">Washer Repair</a></li>--}}
        {{--</ul>--}}
        {{--</div>--}}
        {{--<div class="list-item">--}}
        {{--<h5>Tags</h5>--}}
        {{--<hr>--}}
        {{--<ul class="list-tags-variant-2">--}}
        {{--<li><a href="#">Repair</a></li>--}}
        {{--<li><a href="#">Home Appliance</a></li>--}}
        {{--<li><a href="#">Ice Maker</a></li>--}}
        {{--<li><a href="#">Microwave</a></li>--}}
        {{--<li><a href="#">Stove Repair</a></li>--}}
        {{--</ul>--}}
        {{--</div>--}}
        {{--</div>--}}
    </div>
</div>