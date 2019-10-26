@extends('layouts.main')


@section('content')
    <section class="section-60 section-sm-top-90 section-sm-bottom-110">
        <div class="shell">
            <div class="range range-sm-right">
                <div class="cell-xs-12">
                    <div data-custom-hash="true"
                         class="responsive-tabs responsive-tabs-default responsive-tabs-vertical responsive-tabs-vertical-1 responsive-tabs-primary">
                        <ul style="font-size: 16px;">
                            @foreach($categories as $category)
                                <li style="margin-bottom: 5px;"><a
                                            href="{{ route('provider.index',  [$category->provider_id, $category->slug]) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="resp-tabs-container">
                            <div class="tab">
                                <div class="box-custom-variant-1">
                                    <div class="box-header">
                                        <h3>{{ $categoryID->name }}</h3>
                                    </div>
                                    <div class="box-image"><img src="{{ $categoryID->photo }}" alt="" width="146"
                                                                height="156"/></div>
                                </div>
                                <p>{!! $categoryID->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cell-sm-8 cell-md-9 offset-top-55 offset-sm-top-88">
                    <div class="range range-condensed">
                        <div data-items="1" data-sm-items="3" data-md-items="3" data-lg-items="4" data-stage-padding="0"
                             data-loop="true" data-margin="30" data-sm-margin="73" data-nav="false" data-dots="true"
                             data-sm-dots-each="2" class="owl-carousel owl-carousel-centered">
                            @foreach($products as $product)
                                <div class="item"><a href="#" class="link-image link-image-variant-2"><img
                                                src="{{ $product->photo }}" alt="" width="175" height="39"/></a>
                                    <a href="{{ route('product.item', $product->id) }}"><b>{{ $product->name }}</b></a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="range offset-top-55 offset-sm-top-88">
                        <div class="cell-xs-12">
                            <h5>Contacto con FourComex</h5>
                            <hr>
                            <form data-form-output="form-output-global" data-form-type="contact" method="post"
                                  action="#" class="rd-mailform">
                                <div class="range">
                                    <div class="cell-md-6">
                                        <div class="form-group">
                                            <label for="contact-first-name" class="form-label-outside">Nombre</label>
                                            <input id="contact-first-name" type="text" name="first-name"
                                                   data-constraints="@Required" class="form-control">
                                        </div>
                                    </div>
                                    <div class="cell-md-6 offset-top-18 offset-md-top-0">
                                        <div class="form-group">
                                            <label for="contact-last-name" class="form-label-outside">Apellido</label>
                                            <input id="contact-last-name" type="text" name="last-name"
                                                   data-constraints="@Required" class="form-control">
                                        </div>
                                    </div>
                                    <div class="cell-md-6 offset-top-18">
                                        <div class="form-group">
                                            <label for="contact-email" class="form-label-outside">E-mail</label>
                                            <input id="contact-email" type="email" name="email"
                                                   data-constraints="@Email @Required" class="form-control">
                                        </div>
                                    </div>
                                    <div class="cell-md-6 offset-top-18">
                                        <div class="form-group">
                                            <label for="contact-phone" class="form-label-outside">Teléfono</label>
                                            <input id="contact-phone" type="text" name="phone"
                                                   data-constraints="@Required @Numeric" class="form-control">
                                        </div>
                                    </div>
                                    <div class="cell-xs-12 offset-top-18">
                                        <div class="form-group">
                                            <label for="contact-message" class="form-label-outside">Mensaje</label>
                                            <textarea id="contact-message" name="message" data-constraints="@Required"
                                                      class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="cell-xs-12 offset-top-30">
                                        <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection