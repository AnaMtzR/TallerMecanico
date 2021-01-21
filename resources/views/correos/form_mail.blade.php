@extends('templates.master')
@section('contenido_central')
    <h1 align="center">Responder correo</h1>
    <hr>
@endsection()

@section('contenido_central2')
    <section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img"
        style="background-image: url('{!!  asset('estilo/images/bg_3.jpg') !!}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex justify-content-end">
                <div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate heading-section heading-section-white">
                    <span class="subheading">Por favor, escriba los datos.</span>
                    <h2 class="mb-4">RE:</h2>
                    {!! Form::open(['url' => '/enviar_correo', 'role' => 'form', 'enctype' => 'multipart/form-data']) !!}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('destinatario', 'Destinatario:') !!}<br>
                                {!! Form::email('destinatario', $cotizaciones->correo, [
                                'placeholder' => 'Ingrese el
                                correo',
                                'class' => 'form-control',
                                ]) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('asunto', 'Asunto:') !!}<br>
                                {!! Form::text('asunto', 'Cotización: ' . $cotizaciones->tipos_servicios->nombre,
                                ['placeholder' => 'Ingrese el correo', 'class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('contenido_mail', 'Contenido:') !!}<br>
                                {!! Form::textarea('contenido_mail', null, [
                                'placeholder' => 'Escriba el cuerpo del correo electrónico',
                                'class' => 'form-control',
                                ]) !!}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::submit('Enviar correo', ['class' => 'btn ']) !!}
                                {!! Form::close() !!}
                            </div>
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
