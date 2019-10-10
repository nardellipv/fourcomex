@extends('layouts.main')


@section('content')
    <section class="section-60 section-sm-90">
        <div class="shell">
            <div class="range">
                <div class="cell-md-8">
                    <article class="post-single">
                        <div class="post-header">
                            <h4>{{ $post->title }}</h4>
                        </div>
                        <div class="post-meta">
                            <time datetime="2016-05-26">{{ $post->created_at->format('d-m-Y') }}</time>
                            <span>por</span><span>{{ $post->user->name }}</span></div>
                        <div class="post-body">
                            <figure class="post-image"><img src="{{ $post->photo }}" alt="" width="770" height="510"/>
                            </figure>
                            <div class="post-text">
                                <p>{!! $post->body !!}</p>
                            </div>
                        </div>
                    </article>
                </div>
                @include('web.parts.blog._asideBlog')
            </div>
        </div>
    </section>
@endsection