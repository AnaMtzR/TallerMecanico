@extends('templates.master')
@section('contenido_central')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{!!  asset('estilo/images/login2.jpg') !!}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/index.html">Inicio <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Usuario <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Bienvenido </h1>
                </div>
            </div>
        </div>
    </section>
    <h1 align="center">¡Hola, {!! $usuario->nombre !!}!</h1>
@endsection()
@section('contenido_central2')
    <table align="center" width="70%">
        <tr>
            <td>
                <h5>Usuario</h5>
                <h6><b>Cliente: </b>{!! $usuario->nombre !!} {!! $usuario->ape_paterno !!} {!! $usuario->ape_materno !!}
                </h6>
                <h6><b>Correo: </b>{!! $usuario->correo !!}</h6>
                <h6><b>Nombre de usuario: </b>{!! $usuario->username !!}</h6>
            </td>
            <td>
                <h5>Tarjetas</h5>
                @foreach ($tarjetas as $tarjeta)
                    <h6><b>No. tarjeta: </b>{!! $tarjeta->no_tarjeta !!}
                    </h6>
                    <h6><b>Consorcio: </b>{!! $tarjeta->tipos_consorcio->nombre !!}</h6>
                    <h6><b>Banco: </b>{!! $tarjeta->tipos_banco->nombre !!}</h6>
                    <h6><b>Vigencia: </b>{!! $tarjeta->mes !!}/{!! $tarjeta->anio !!}</h6>
                    {!! Form::open(['method' => 'DELETE', 'url' => '/tarjetas_cliente/' . $tarjeta->id]) !!}
                    {!! Form::submit('Eliminar', ['class' => 'btn']) !!}
                    {!! Form::close() !!}
                    <hr>
                @endforeach
            </td>
        </tr>
        <br />
        <tr>
            <td>
                <h5>Dirección</h5>
                <h6><b>Dirección: </b>{!! $usuario->direccion !!}, {!! $usuario->colonia !!}
                </h6>
                <h6><b>Municipio: </b>{!! $usuario->municipios->nombre !!}</h6>
                <h6><b>Entidad: </b>{!! $usuario->entidades->nombre !!}</h6>
            </td>
            <td>
                <a href="../agregar_tarjeta/{!!  $usuario->id !!}" class="btn btn-primary"> Agregar Tarjeta</a>
            </td>
        </tr>
    </table>
@endsection()

@section('contenido_central3')
    <br />
    <br />
    <div align="center">
        {!! Form::submit('Iniciar sesión', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
    <br />
    <br />
@endsection()

@section('contenido_central4')

@endsection()
