@extends('templates.master')
@section('contenido_central')
    <h1 align="center">Agregar tarjeta</h1>
@endsection()
@section('contenido_central2')


    {!! Form::open(['url' => '/tarjetas_cliente']) !!}

    <table align="center" width="auto">
        <tr>
            <td width="400px">
                {!! Form::label('name', 'Nombre del propietario') !!}
                {!! Form::text('name', $usuario->nombre . ' ' . $usuario->ape_paterno . ' ' . $usuario->ape_materno,
                ['placeholder' => 'Nombre del propietario', 'class' => 'form-control', 'disabled']) !!}

                {!! Form::label('id_usuario', 'Usuario', 'hidden') !!}
                {!! Form::number('id_usuario', $usuario->id, ['placeholder' => 'Nombre del propietario', 'class' =>
                'form-control', 'hidden']) !!}

                {!! Form::label('no_tarjeta', 'No de Tarjeta') !!}
                {!! Form::number('no_tarjeta', null, ['placeholder' => 'Ingresa tu numero de tarjeta', 'class' =>
                'form-control']) !!}

                {!! Form::label('cvr', 'CVV') !!}
                {!! Form::text('cvr', null, ['placeholder' => 'Ingresa clave de tarjeta', 'class' => 'form-control']) !!}

                {!! Form::label('mes', 'Mes') !!}
                {!! Form::select('mes', ['1' => 'Enero', '2' => 'Febrero', '3' => 'Marzo', '4' => 'Abril', '5' => 'Mayo',
                '6' => 'Junio', '7' => 'Julio', '8' => 'Agosto', '9' => 'Septiembre', '10' => 'Octubre', '11' =>
                'Noviembre', '12' => 'Diciembre'], 'null', ['placeholder' => 'Selecciona un mes', 'class' =>
                'form-control']) !!}
            </td>
            <td block></td>
            <td width="400px">
                {!! Form::label('anio', 'Año') !!}
                {!! Form::number('anio', '2021', ['placeholder' => 'Seleccionar ...', 'class' => 'form-control']) !!}

                {!! Form::label('id_banco', 'Banco') !!}
                {!! Form::select('id_banco', $tipos_banco->pluck('nombre', 'id')->all(), null, ['placeholder' =>
                'Seleccionar ...', 'class' => 'form-control']) !!}

                {!! Form::label('id_consorcio', 'Consorcio') !!}
                {!! Form::select('id_consorcio', $tipos_consorcio->pluck('nombre', 'id')->all(), null, ['placeholder' =>
                'Seleccionar ...', 'class' => 'form-control']) !!}

                {!! Form::label('status', 'Estatus', 'hidden') !!}
                {!! Form::select('status', ['1' => 'Activo', '0' => 'Baja'], '1', [
                'placeholder' => 'Selecciona estatus de
                la tarjeta',
                'class' => 'form-control',
                'hidden',
                ]) !!}
            </td>
        </tr>
    </table>
    <br>
    <div align="center">
        {!! Form::submit('Agregar', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}

        <a class="btn" href="{!!  asset('tarjetas_cliente') !!}">Regresar</a>

    </div>
    <br />

@endsection()
@section('contenido_central3')

@endsection()
@section('contenido_central4')

@endsection()
