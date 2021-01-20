@extends('templates.master')
@section('contenido_central')
    <!-- AJAX para llenar el combo de municipios: -->
    <script>
        function llenar_municipios(id_entidad) {
            $("#id_municipio").empty();
            var asset = "{{ asset('') }}";
            var ruta = asset + 'combo_municipios_x_entidad/' + id_entidad;
            $.ajax({
                type: 'GET',
                url: ruta,
                success: function(data) {
                    var municipios = data;
                    for (var i = 0; i < municipios.length; i++) {
                        $('#id_municipio').append('<option value="' + municipios[i].id + '">' +
                            municipios[i].nombre + '</option>'); 
                    }
                }
            });
        }

    </script>
    <!--Fin Script AJAX-->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('{!!  asset('estilo/images/sesion2.jpg') !!}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Inicio <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Usuario <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Crear cuenta </h1>
                </div>
            </div>
        </div>
    </section>
    <br />
    <h1 align="center">Datos personales</h1>
@endsection()
@section('contenido_central2')
    {!! Form::open(['url' => '/users']) !!}
    <table align="center" width="70%">
        <tr>
            <td>
                {!! Form::label('ape_paterno', 'Apellido Paterno') !!}<br>
                {!! Form::text('ape_paterno', null, ['placeholder' => 'Ingresa apellido paterno', 'class' => 'form-control',
                'required']) !!}
            </td>
            <td>
                {!! Form::label('ape_materno', 'Apellido Materno') !!}<br>
                {!! Form::text('ape_materno', null, ['placeholder' => 'Ingresa apellido materno', 'class' => 'form-control',
                'required']) !!}
            </td>
            <td>
                {!! Form::label('nombre', 'Nombre') !!}<br>
                {!! Form::text('nombre', null, ['placeholder' => 'Ingresa tu(s) nombre(s)', 'class' => 'form-control',
                'required']) !!}
            </td>
        </tr>
        <tr>
            <td>

                {!! Form::label('edad', 'Edad') !!}<br>
                {!! Form::number('edad', null, ['placeholder' => 'Ingresa tu edad', 'class' => 'form-control', 'required'])
                !!}
            </td>
            <td>
                {!! Form::label('genero', 'Genero') !!}<br>
                {!! Form::select('genero', ['M' => 'Masculino', 'F' => 'Femenino'], 'null', [
                'placeholder' => 'Selecciona
                genero',
                'class' => 'form-control',
                'required',
                ]) !!}
            </td>
        </tr>
    </table>

    <hr>


    <h2 align="center">Datos de Domicilio</h2>
    <table align="center" width="70%">
        <tr>
            <td>
                {!! Form::label('direccion', 'Dirección actual') !!}<br>
                {!! Form::text('direccion', null, ['placeholder' => 'Ingresa tu dirección', 'class' => 'form-control',
                'required']) !!}
            </td>
            <td>
                {!! Form::label('colonia', 'Colonia') !!}<br>
                {!! Form::text('colonia', null, ['placeholder' => 'Ingresa Nombre de tu colonia', 'class' => 'form-control',
                'required']) !!}
            </td>
            <td>
                {!! Form::label('cp', 'Código Postal') !!}<br>
                {!! Form::number('cp', null, ['placeholder' => 'Ingresa tu cp ', 'class' => 'form-control', 'required']) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('id_entidad', 'Entidad') !!}<br>
                {!! Form::select('id_entidad', $entidades->pluck('nombre', 'id')->all(), null, ['placeholder' =>
                'Seleccionar ...', 'class' => 'form-control', 'required', 'onchange' => 'llenar_municipios(this.value);'])
                !!}
            </td>
            <td colspan="2">
                {!! Form::label('id_municipio', 'Municipio') !!}<br>
                {!! Form::select('id_municipio', $municipios->pluck('nombre', 'id')->all(), null, ['placeholder' =>
                'Seleccionar ...', 'class' => 'form-control', 'required']) !!}
            </td>
        </tr>
    </table>

    <hr>
    <br>
    <h3 align="center">Datos de Usuario</h3>
    <table align="center" width="70%">
        <tr>
            <td>
                {!! Form::label('correo', 'Correo') !!}<br>
                {!! Form::text('correo', null, ['placeholder' => 'Ingresa tu correo electronico', 'class' => 'form-control',
                'required']) !!}
            </td>
            <td>
                {!! Form::label('username', 'Alias de usuario') !!}<br>
                {!! Form::text('username', null, ['placeholder' => 'Ingresa tu alias', 'class' => 'form-control',
                'required']) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('psw', 'Ingresa una contraseña') !!}<br>
                {!! Form::password('psw', null, ['placeholder' => 'Ingresa tu contraseña ', 'class' => 'form-control',
                'required']) !!}
            </td>
            <td>
                {!! Form::label('status', 'Estatus', 'hidden') !!} <br>
                {!! Form::select('status', ['1' => 'Activo', '0' => 'Baja'], '1', ['placeholder' => 'Selecciona estatus',
                'class' => 'form-control', 'required', 'hidden']) !!}
            </td>
        </tr>
        <tr>
            <td colspan="2">
                {!! Form::label('id_tipo_usuario', 'Tipo usuario', 'hidden') !!} <br>
                {!! Form::select('id_tipo_usuario', $tipo_usuario->pluck('nombre', 'id')->all(), 3, ['placeholder' =>
                'Seleccionar ...', 'class' => 'form-control', 'required', 'hidden']) !!}
            </td>
        </tr>
    </table>

@endsection()
@section('contenido_central3')
    <br />
    <br />
    <div align="center">
        {!! Form::submit('Crear cuenta', ['class' => 'btn ']) !!}
        {!! Form::close() !!}
    </div>
    <br />
    <br />
@endsection()
@section('contenido_central4')

@endsection()
