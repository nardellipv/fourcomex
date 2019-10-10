@extends('layouts.main')


@section('content')
    <section class="section-60 section-sm-90">
        <div class="shell">
            <div class="range">
                <div class="cell-md-8">
                    <h5>Contacto con FourComex</h5>
                    <hr>
                    <p>You can contact us any way that is convenient for you. We are available 24/7 via fax or email.
                        You can also use a quick contact form below or visit our office personally.</p>
                    <p>We would be happy to answer your questions.</p>
                    <div class="offset-top-50">
                        <form data-form-output="form-output-global" data-form-type="contact" method="post" action="#"
                              class="rd-mailform rd-mailform-mod-1">
                            <div class="range">
                                <div class="cell-sm-6">
                                    <div class="form-group">
                                        <label for="contact-first-name" class="form-label-outside">Nombre</label>
                                        <input id="contact-first-name" type="text" name="first-name"
                                               data-constraints="@Required" class="form-control">
                                    </div>
                                </div>
                                <div class="cell-sm-6 offset-top-18 offset-sm-top-0">
                                    <div class="form-group">
                                        <label for="contact-last-name" class="form-label-outside">Apellido</label>
                                        <input id="contact-last-name" type="text" name="last-name"
                                               data-constraints="@Required" class="form-control">
                                    </div>
                                </div>
                                <div class="cell-sm-6 offset-top-18">
                                    <div class="form-group">
                                        <label for="contact-email" class="form-label-outside">E-mail</label>
                                        <input id="contact-email" type="email" name="email"
                                               data-constraints="@Email @Required" class="form-control">
                                    </div>
                                </div>
                                <div class="cell-sm-6 offset-top-18">
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
                                <h5>Phone</h5>
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
                                <h5>Address</h5>
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