<section class="section-60 section-sm-110 bg-gray-lighter">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2 style="color: #004A8C;">Últimas noticias</h2>
                <div class="divider divider-md divider-primary"></div>
            </div>
        </div>
        <div class="row isotope-wrap offset-top-35 offset-md-top-55">
            <div data-isotope-layout="moduloColumns" class="isotope isotope-spacing-1">
                @foreach($lastPosts as $lastPost)
                    <div class="col-sm-6 col-lg-4 isotope-item">
                        <article class="post post-variant-1">
                            <img src="{{ asset('images/blog/370x278-'.$lastPost->photo) }}" alt="" />

                            <div class="post-body">
                                <div class="post-header">
                                    <h6><a href="{{ route('blog.post', $lastPost->slug) }}">{{ $lastPost->title }}</a>
                                    </h6>
                                </div>
                                <div class="post-meta">
                                    <time datetime="2016-03-05">May 26, 2016 at 10:34 am</time>
                                </div>
                                <div class="post-text">
                                    <p>{!! Str::limit($lastPost->body, 150) !!}</p>
                                </div>
                                <div class="post-footer">
                                    <ul class="list-tags-variant-1">
                                        <li><a href="{{ route('blog.post', $lastPost->slug) }}">Leer Noticia</a></li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="shell offset-top-30 offset-sm-top-60">
        <div class="text-center"><a href="{{ route('blog.index') }}" class="btn btn-primary min-width-230">Ver
                Noticias</a></div>
    </div>
</section>