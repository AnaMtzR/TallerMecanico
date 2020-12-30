@extends('templates.master')
@section('contenido_central')

<table align="center"  cellpadding="15" cellspacing="5px" style="max-width:100%" >
		
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
        <th>PSW</th>
        <th>Status</th>
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
        <td>{!! $users->psw !!}</td>	
        <td>{!! $users->status !!}</td>
        
    </tr>
    @endforeach
</table>


@endsection()