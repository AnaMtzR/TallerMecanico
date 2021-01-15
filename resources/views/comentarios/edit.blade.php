@extends('templates.master')
@section('contenido_central')
<h1 align="center">Editar Comentario</h1>
@endsection()
@section('contenido_central2')	


{!! Form::open (['method'=>'PATCH','url'=>'/comentarios/'.$comentarios->id]) !!} 

	
	<table align="center" width="auto">
	<tr>
	<td  >
	{!! Form::label ('id_usuario','Usuario') !!}
	{!! Form::select ('id_usuario',
	$users->pluck('correo','id')->all() 
	,$comentarios->id_usuario,['placeholder'=>'Seleccionar usuario ...','class'=>'form-control','required']) !!}	
	</td>
	</tr>
	<tr>
	<td >
	{!! Form::label ('fecha','Fecha') !!}	
	{!! Form::date ('fecha',$comentarios->fecha,['placeholder'=>'Seleccionar fecha ...','class'=>'form-control','required']) !!}
	<tr>
	<td width="400px" height="250px"  >
	{!! Form::label ('descripcion','Escribe un comentario de tu servicio') !!}
	{!! Form::textarea ('descripcion',$comentarios->descripcion,['placeholder'=>'Escribe un comentario de tu servicio','class'=>'form-control','required']) !!}
	</td>
	</tr>
	
	<tr>
		<td>

	{!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),$comentarios->status,['placeholder'=>'Selecciona estatus de la tarjeta','class'=>'form-control','required']) !!} 


	</td>
	</tr>
</table>
	<br>
	<div align="center">
	{!! Form::submit('Guardar', ['class'=>'btn ']) !!}	
			{!! Form::close() !!}
	
	<a class="btn" href="{!! asset('comentarios') !!}">Regresar</a>
	
	</div>
	 
@endsection()
@section('contenido_central3')

@endsection()
@section('contenido_central4')
  
@endsection()
