@extends('templates.master')
@section('contenido_central')
<h1 align="center">Usuarios</h1>
@endsection()
@section('contenido_central2')  


<table align="center"  cellpadding="15" cellspacing="5px" style="max-width:90%" >
		
    <tr>
        <th>Tipo de usuario</th>
        <th>Nombre completo</th>
        <th>Edad</th>
        <th>Género</th>
        <th>Dirección</th>
        <th>Entidad</th>
        <th>Municipio</th>
        <th>Colonia</th>
        <th>CP</th>
        <th>Username</th>
        <th>Correo</th>
        <th align="center">Acciones</th>
    </tr>

    @foreach($users as $users)
    <tr>
        <td>{!! $users->tipos_usuario->nombre !!}</td>
        <td>{!! $users->ape_paterno !!} {!! $users->ape_materno !!}  {!! $users->nombre !!}</td>
        <td>{!! $users->edad !!}</td>
        <td>{!! $users->genero !!}</td>
        <td>{!! $users->direccion !!}</td>
        <td>{!! $users->entidades->nombre !!}</td>
        <td>{!! $users->municipios->nombre !!}</td>
        <td>{!! $users->colonia !!}</td>
        <td>{!! $users->cp !!}</td>
        <td>{!! $users->username !!}</td>
        <td>{!! $users->correo !!}</td>
       <td align="center">
                <a class="btn btn-primary" href="{!! 'users/'.$users->id !!}">Detalle</a>
                <a class="btn btn-sm btn-primary" href="{!! 'users/'.$users->id.'/edit' !!}">Editar</a>
              {!! Form::open (['method'=>'DELETE','url'=>'/users/'.$users->id]) !!} 
                {!! Form::submit('Eliminar', ['class'=>'btn btn-primary ']) !!}  
                {!! Form::close() !!}
            </td>
        
    </tr>
    @endforeach
</table>
<div align="center">
                <a href="users/create" class="btn"> Agregar Usuario</a>
                <a href="cruds" class="btn">Regresar</a>
        </div>

@endsection()