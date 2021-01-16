@extends('templates.master')
@section('contenido_central')
<h1 align="center">Tipos de usuarios</h1>
@endsection()
@section('contenido_central2')

	
	<table align="center">
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Acciones</th>
		</tr>
		@foreach($tipos_usuario as $usuario)
		<tr>
			<td>{!! $usuario->id !!}</td>
			<td>{!! $usuario->nombre !!}</td>
			<td>
				<a class="btn btn-primary" href="{!! 'tipos_usuario/'.$usuario->id !!}">Detalle</a>
				<a class="btn btn-primary" href="{!! 'tipos_usuario/'.$usuario->id.'/edit' !!}">Editar</a>
					
			</td>
			<td>
				{!! Form::open (['method'=>'DELETE','url'=>'/tipos_usuario/'.$usuario->id]) !!} 
				{!! Form::submit('Eliminar', ['class'=>'btn btn-primary']) !!}	
				{!! Form::close() !!}
			</td>
		</tr>
		@endforeach
	</table>
	<br>
	<div align="center">
		<a  class="btn " href="tipos_usuario/create"> Agregar tipo de usuario</a>
		<a href="cruds"  class="btn">Regresar</a>
	</div>

@endsection()
@section('contenido_central3')

@endsection()
@section('contenido_central4')
  
@endsection()
