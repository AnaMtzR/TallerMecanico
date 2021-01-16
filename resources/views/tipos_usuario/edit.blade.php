@extends('templates.master')
@section('contenido_central')
<h1 align="center">Editar tipo de usuarios</h1>
@endsection()
@section('contenido_central2')

	
	<table align="center">
		<tr>
	

	{!! Form::open (['method'=>'PATCH','url'=>'/tipos_usuario/'.$tipos_usuario->id]) !!} 

	
		<table align="center">
		<tr>
			<td>
			{!! Form::label ('nombre','Nombre usuario') !!}<br>
			{!! Form::text ('nombre',$tipos_usuario->nombre,['placeholder'=>'Ingresa nombre del tipo','class'=>'form-control']) !!}	
		</td>
		</tr>
		<tr>
			<td>
				{!! Form::label ('status','Estatus') !!}<br>
				{!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),$tipos_usuario->status,
				['placeholder'=>'Selecciona estatus del entidad','class'=>'form-control']) !!}
			</td>
		</tr>
	</table>
	<br>
	
@endsection()
@section('contenido_central3')
<div align="center">
			{!! Form::submit('Guardar', ['class'=>'btn ']) !!}	
			{!! Form::close() !!}	
				<a class="btn "  href="{!! asset('tipos_usuario') !!}">Regresar</a>
		</div>
@endsection()
@section('contenido_central4')
  
@endsection()
