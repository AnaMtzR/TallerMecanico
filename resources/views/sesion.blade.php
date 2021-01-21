@extends('templates.master')
@section('contenido_central')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{!!  asset('estilo/images/login2.jpg') !!}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Inicio <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Usuario <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Iniciar Sesión </h1>
                </div>
            </div>
        </div>
    </section>
    <h1 align="center">Iniciar sesión</h1>
@endsection()
@section('contenido_central2')
    <table align="center" width="70%">
        <tr>
            <td>
                {!! Form::label('email', 'Correo electrónico') !!}<br>
                {!! Form::email('email', null, ['placeholder' => 'Ingresar correo electrónico', 'class' => 'form-control',
                'required']) !!}
            </td>
            <td>
                {!! Form::label('passwd', 'Contraseña') !!}
                <br>
                {!! Form::text('passwd', null, ['placeholder' => 'Ingresar contraseña', 'class' => 'form-control',
                'required']) !!}
            </td>
        </tr>
    </table>
@endsection()

@section('contenido_central3')
    <br />
    <br />
    <div align="center">
        {!! Form::submit('Iniciar sesión', ['class' => 'btn ']) !!}
        {!! Form::close() !!}
    </div>
    <br />
    <br />
@endsection()

@section('contenido_central4')

@endsection()
