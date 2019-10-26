<div class="swiper-wrapper">
    <div data-autoplay="false" data-slide-effect="fade" class="swiper-container swiper-slider">
        <div class="swiper-wrapper">
            @foreach($productsSlider as $product)
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-offset-1 col-sm-5"><h2 style="color: #004A8C;">{{ $product->name }}</h2></div>
                            <div class="col-sm-5"><img src="{{ $product->photo }}" width="50%" style="margin-top: 20%;"> </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination-wrap">
            <div class="shell">
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>