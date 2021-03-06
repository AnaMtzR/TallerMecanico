@extends('templates.master')
@section('contenido_central')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{!! asset('estilo/images/image_3.jpg') !!}');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Inicio <i class="fa fa-chevron-right"></i></a></span> <span>Servicios <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Servicios</h1>
      </div>
    </div>
  </div>
</section>
@endsection()
@section('contenido_central2')
<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2>Ofrecemos los servicios</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 services ftco-animate">
        <div class="d-block d-flex">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-car-service"></span>
          </div>
          <div class="media-body pl-3">
            <h3 class="heading">Cambio de aceite</h3>
            <p>Cambio de lo mejores aceites.... </p>
            <p><a href="servicios" class="btn-custom">Saber más</a></p>
          </div>
        </div>
        <div class="d-block d-flex">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-tyre"></span>
          </div>
          <div class="media-body pl-3">
            <h3 class="heading">Cambio de llanta</h3>
            <p>Buscas un cambio de llantas rápido y accesible...</p>
            <p><a href="servicios" class="btn-custom">Saber más</a></p>
          </div>
        </div>

      </div>
      <div class="col-md-6 services ftco-animate">
        <div class="d-block d-flex">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-battery"></span>
          </div>
          <div class="media-body pl-3">
            <h3 class="heading">Baterías</h3>
            <p>Te has quedado sin una batería aquí tenemos... </p>
            <p><a href="servicios" class="btn-custom">Saber más</a></p>
          </div>
        </div>

        <div class="d-block d-flex">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-repair"></span>
          </div>
          <div class="media-body pl-3">
            <h3 class="heading">Mantenimiento del auto</h3>
            <p>El mejor mantenimiento se lo damos a tu coche...</p>
            <p><a href="servicios" class="btn-custom">Saber más</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection()
@section('contenido_central3')


@endsection()
@section('contenido_central4')

@endsection()