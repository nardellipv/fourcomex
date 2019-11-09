@extends('layouts.main')

@section('content')
    <section class="section-60 section-sm-top-90 section-sm-bottom-110">
        <div class="shell">
            <div class="range">
                <div class="cell-md-8">
                    <ul class="blog-modern">
                        @foreach($posts as $post)
                            <li class="post-wrap">
                                <div class="post-wrap-header">
                                    <article class="post-wrap-meta">
                                        <time datetime="2016-05-06">{{ $post->created_at->format('d-M') }}</time>
                                        <br>
                                        <div class="link"><a href="#">{{ $post->user->name }}</a></div>
                                    </article>
                                </div>
                                <div class="post-wrap-body">
                                    <article class="post post-variant-4">
                                        <img src="{{ asset('images/blog/570x428-'.$post->photo) }}" alt="{{ $post->title }}" />
                                        <div class="post-body">
                                            <div class="post-header">
                                                <h6><a href="{{ route('blog.post', $post->slug) }}">{{ $post->title }}</a></h6>
                                            </div>
                                            <div class="post-text">
                                                <p>{!! Str::limit($post->body, 150) !!}</p>
                                            </div>
                                            <div class="post-footer">
                                                <ul class="list-tags-variant-1">
                                                    <li><a href="{{ route('blog.post', $post->slug) }}">Continuar Leyendo</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <div class="offset-top-35 offset-sm-top-60">
                        {{ $posts->render() }}
                    </div>
                </div>
                @include('web.parts.blog._asideBlog')
            </div>
        </div>
    </section>
@endsection