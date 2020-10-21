@extends('templates.master')
@section('contenido_central')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{!! asset('estilo/images/work-6.jpg') !!}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Inicio <i class="fa fa-chevron-right"></i></a></span> <span>Reservas <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Reservar</h1>
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
    		<div  class="row"  >
          <div class="col-md-6 services ftco-animate">
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-car-service"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Cambio de aceite</h3>
                <p>Cambio de lo mejores aceites.... </p>s
              </div>
            </div>
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-tyre"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Cambio de llanta</h3>
                <p>Buscas un cambio de llantas rápido y accesible...</p>
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
              </div>
            </div> 
            
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-repair"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Mantenimiento del auto</h3>
                <p>El mejor mantenimiento se lo damos a tu coche...</p>
              </div>
            </div>       
          </div>
        </div>
    </div>
</section>
@endsection()
@section('contenido_central3')
<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" style="background-image: url('{!! asset('estilo/images/bg_3.jpg') !!}');">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate heading-section heading-section-white">
    				<span class="subheading">Hacer una cita al taller</span>
    				<h2 class="mb-4">Consulta</h2>
    				<form action="#" class="appointment">
    					<div class="row">
    						<div class="col-md-12">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="" id="" class="form-control">
	                      	<option value="">Elige un servicio</option>
	                        <option value="">Cambio de aceite</option>
	                       <option value="">Cambio de batería</option>
	                        <option value="">Cambío de llantas</option>
	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="email" class="form-control" placeholder="correo">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" placeholder="Vehículo">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="fa fa-calendar"></span></div>
			            		<input type="text" class="form-control appointment_date" placeholder="Fecha">
		            		</div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="fa fa-clock-o"></span></div>
			            		<input type="text" class="form-control appointment_time" placeholder="Hora">
		            		</div>
			    				</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Detalles del servicio que desea"></textarea>
			            </div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			              <input type="submit" value="Enviar consulta" class="btn btn-dark py-3 px-4">
			            </div>
								</div>
    					</div>
	          </form>
    			</div>
    		</div>
    	</div>
    </section>


@endsection()
@section('contenido_central4')
  
@endsection()
