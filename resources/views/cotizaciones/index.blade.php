@extends('templates.master')
@section('contenido_central')
    <h1 align="center">Cotizaciones</h1>
@endsection()
@section('contenido_central2')


    <table align="center" width="80%">
        <tr>
        <tr align="center">
            <th>ID</th>
            <th>Fecha</th>
            <th>Correo</th>
            <th>Tipo de servicio</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>

        @foreach ($cotizaciones as $cotizacion)
            <tr>
                <td>{!! $cotizacion->id !!}</td>
                <td>{!! $cotizacion->fecha_inicio !!}</td>
                <td>{!! $cotizacion->correo !!}</td>
                <td>{!! $cotizacion->tipos_servicios->nombre !!}</td>
                <td height="auto" style="text-align: justify" width="620px">{!! $cotizacion->descripcion !!}</td>
                <td>
                    <table align="center">
                        <tr>
                            <td>
                                <a href="{!!  'form_mail/' . $cotizacion->id !!}" class="btn btn-primary">Responder</a>
                            </td>
                            <td>
                                <a href="{!!  'cotizaciones/' . $cotizacion->id !!}" class="btn btn-primary">Detalle</a>
                            </td>
                            <td>
                                <a href="{!!  'cotizaciones/' . $cotizacion->id . '/edit' !!}"
                                    class="btn btn-primary">Editar</a>
                            </td>
                            <td>
                                {!! Form::open(['method' => 'DELETE', 'url' => '/cotizaciones/' . $cotizacion->id]) !!}
                                {!! Form::submit('Eliminar', ['class' => 'btn btn-primary']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

        @endforeach
    </table>
    <br>
    <div align="center">
        <a href="cotizaciones/create" class="btn"> Agregar cotizacion</a>
        <a href="cruds" class="btn">Regresar</a>
    </div>



@endsection()
@section('contenido_central3')

@endsection()
@section('contenido_central4')

@endsection()
