@extends('layouts.main')


@section('content')
    <section class="section-60 section-sm-90 section-md-110">
        <div class="shell">
            <div class="range range-sm-center">
                <div class="cell-sm-8 cell-md-6">
                    <div class="inset-md-right-30">
                        <div class="thumbnail thumbnail-video">
                            <img src="{{ asset('images/section/600x316-' .$about->picture) }}" alt="fourcomex" class="img-responsive" />
                        </div>
                    </div>
                </div>
                <div class="cell-sm-8 cell-md-6 offset-top-45 offset-md-top-0">
                    <h2>{{ $about->title }}</h2>
                    <div class="divider divider-md divider-primary divider-sm-left"></div>
                    <p class="offset-top-30 offset-md-top-55">{!! $about->text !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection