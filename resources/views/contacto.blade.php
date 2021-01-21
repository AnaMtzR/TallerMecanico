@extends('templates.master')
@section('contenido_central')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{!!  asset('estilo/images/image_6.jpg') !!}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Inicio <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Contacto <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Contacto</h1>
                </div>
            </div>
        </div>
    </section>


@endsection()
@section('contenido_central2')
    <section class="ftco-section bg-light">
        <div class="col-md-12">
            <div class="wrapper">
                <div class="row no-gutters">
                    <div class="col-md-12 d-flex">
                        <div class="contact-wrap w-100 p-md-5 p-4">
                            <h3 class="mb-4">Ingresa tus datos </h3>
                            <form method="GET" id="contactForm" class="contactForm">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="Nombre">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Correo electronico">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" id="subject"
                                                placeholder="Asunto">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="7"
                                                placeholder="Mensaje"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" value="Envíar" class="btn btn-primary">
                                            <div class="submitting"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection()
@section('contenido_central3')
    <div class="col-md-15 d-flex align-items-stretch">
        <div class="info-wrap bg-primary w-100 p-lg-5 p-4">
            <h3 class="mb-4 mt-md-4">Contactanos</h3>
            <div class="dbox w-100 d-flex align-items-start">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-map-marker"></span>
                </div>
                <div class="text pl-3">
                    <p><span>Dirección:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                </div>
            </div>
            <div class="dbox w-100 d-flex align-items-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-phone"></span>
                </div>
                <div class="text pl-3">
                    <p><span>Telefono:</span> <a href="tel://0000000">+ 1235 2355 98</a></p>
                </div>
            </div>
            <div class="dbox w-100 d-flex align-items-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-paper-plane"></span>
                </div>
                <div class="text pl-3">
                    <p><span>Email:</span> <a href="halconm26@gmail.com">halconm26@gmail.com</a></p>
                </div>
            </div>
            <div class="dbox w-100 d-flex align-items-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-globe"></span>
                </div>
                <div class="text pl-3">
                    <p><span>Sitio</span> <a href="inicio">Taller Mec&aacute;nico</a></p>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>


@endsection()
@section('contenido_central4')

@endsection()
