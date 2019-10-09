<section class="section-60 section-sm-110 bg-gray-lighter">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2 style="color: #004A8C;">BLACKMER TECHNOLOGIES</h2>
                <div class="divider divider-md divider-primary"></div>
            </div>
        </div>
        <div class="row isotope-wrap offset-top-35 offset-md-top-55">
            <div data-isotope-layout="moduloColumns" class="isotope isotope-spacing-1">
                @foreach($products as $product)
                    <div class="col-sm-6 col-lg-4 isotope-item">
                        <article class="post post-variant-1">
                            <figure class="post-image"><img src="{{ $product->photo }}" alt="" />
                            </figure>
                            <div class="post-body">
                                <div class="post-header">
                                    <h6><a href="blog-post.html">{{ $product->name }}</a></h6>
                                </div>
                                <div class="post-text">
                                    <p>{{ Str::limit($product->description, 150) }}</p>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>