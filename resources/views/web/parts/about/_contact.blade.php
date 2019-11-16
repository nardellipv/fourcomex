@extends('layouts.main')


@section('content')
    <section class="section-60 section-sm-90">
        <div class="shell">
            <div class="range">
                @include('admin.alerts.error')
                <div class="cell-md-8">
                    <h5>Contacto con FourComex</h5>
                    <hr>
                    <div class="offset-top-50">
                        <form  method="post" action="{{ route('contact.web') }}">
                            @csrf
                            <div class="range">
                                <div class="cell-sm-6">
                                    <div class="form-group">
                                        <label for="contact-first-name" class="form-label-outside">Nombre</label>
                                        <input id="contact-first-name" type="text" name="name" value="{{ old('name') }}"
                                               data-constraints="@Required" class="form-control">
                                    </div>
                                </div>
                                <div class="cell-sm-6 offset-top-18 offset-sm-top-0">
                                    <div class="form-group">
                                        <label for="contact-last-name" class="form-label-outside">Apellido</label>
                                        <input id="contact-last-name" type="text" name="lastname" value="{{ old('lastname') }}"
                                               data-constraints="@Required" class="form-control">
                                    </div>
                                </div>
                                <div class="cell-sm-6 offset-top-18">
                                    <div class="form-group">
                                        <label for="contact-email" class="form-label-outside">E-mail</label>
                                        <input id="contact-email" type="email" name="email" value="{{ old('email') }}"
                                               data-constraints="@Email @Required" class="form-control">
                                    </div>
                                </div>
                                <div class="cell-sm-6 offset-top-18">
                                    <div class="form-group">
                                        <label for="contact-phone" class="form-label-outside">Teléfono</label>
                                        <input id="contact-phone" type="text" name="phone" value="{{ old('phone') }}"
                                               data-constraints="@Required @Numeric" class="form-control">
                                    </div>
                                </div>
                                <div class="cell-xs-12 offset-top-18">
                                    <div class="form-group">
                                        <label for="contact-message" class="form-label-outside">Mensaje</label>
                                        <textarea id="contact-message" name="messageContact" data-constraints="@Required"
                                                  class="form-control">{{ old('messageContact') }}</textarea>
                                    </div>
                                </div>
                                <div class="cell-xs-12 offset-top-30">
                                    <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="cell-md-4">
                    <div class="range inset-lg-left-30">
                        <div class="cell-sm-6 cell-md-12">
                            <h5>Social</h5>
                            <hr>
                            <ul class="list-inline list-inline-xxs">
                                <li><a href="#"
                                       class="icon icon-xs icon-circle icon-white icon-filled-facebook fa-facebook"></a>
                                </li>
                                <li><a href="#"
                                       class="icon icon-xs icon-circle icon-white icon-filled-twitter fa-twitter"></a>
                                </li>
                                <li><a href="#"
                                       class="icon icon-xs icon-circle icon-white icon-filled-google fa-google"></a>
                                </li>
                                <li><a href="#"
                                       class="icon icon-xs icon-circle icon-white icon-filled-linkedin fa-linkedin"></a>
                                </li>
                                <li><a href="#"
                                       class="icon icon-xs icon-circle icon-white icon-filled-instagram fa-instagram"></a>
                                </li>
                            </ul>
                            <div class="offset-top-30 offset-md-top-55">
                                <h5>Teléfono</h5>
                                <hr>
                                <address class="contact-info">
                                    <div class="unit unit-horizontal unit-spacing-xs">
                                        <div class="unit-left icon-adjust-vertical"><span
                                                    class="icon icon-xs icon-primary mdi mdi-phone"></span></div>
                                        <div class="unit-body">
                                            <ul class="list-links">
                                                <li><a href="callto:#" class="link-dark">+54 911 34 35 52 12</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </address>
                            </div>
                            <div class="offset-top-30 offset-md-top-55">
                                <h5>Dirección</h5>
                                <hr>
                                <address class="contact-info">
                                    <div class="unit unit-horizontal unit-spacing-xs">
                                        <div class="unit-left icon-adjust-vertical"><span
                                                    class="icon icon-xs icon-primary mdi mdi-map-marker"></span></div>
                                        <div class="unit-body"><a href="#" class="link-dark nowrap">Av. Cabildo 3449 10º
                                                B<br>
                                                Buenos Aires, <br>Argentina</a></div>
                                    </div>
                                </address>
                            </div>
                        </div>
                        <div class="cell-sm-6 cell-md-12 offset-top-30 offset-sm-top-0 offset-md-top-55">
                            <div class="offset-top-30 offset-md-top-55">
                                <h5>E-mail</h5>
                                <hr>
                                <div class="unit unit-horizontal unit-spacing-xs offset-top-22">
                                    <div class="unit-left icon-adjust-vertical"><span
                                                class="icon icon-xs icon-primary mdi mdi-email-outline"></span></div>
                                    <div class="unit-body"><a href="#89aa" class="link-primary"><span
                                                    class="__cf_email__"
                                                    data-cfemail="056c6b636a456160686a696c6b6e2b6a7762">info@fourcomex.com</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection