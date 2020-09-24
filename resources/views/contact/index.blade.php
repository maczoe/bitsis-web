@extends('layout/main')

@section('content')
<!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center" data-background="assets/img/hero/h2_hero.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-cap text-center pt-50">
                    <h2>Contácto</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->
     <!-- ================ contact section start ================= -->
     <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Envíanos un mensaje</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mensaje'" placeholder="Mensaje"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tu nombre'" placeholder="Tu nombre">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tu email'" placeholder="Tu email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Asunto'" placeholder="Asunto">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm btn">Enviar</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Calle la ronda 0-29, Zona 3.</h3>
                            <p>Jutiapa, Guatemala</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+502 7844 2102</h3>
                            <p>De lunes a viernes de 8 AM a 5 PM</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>info@bitsis.gt</h3>
                            <p>Escríbenos en cualquier momento</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- ================ contact section end ================= -->
@endsection