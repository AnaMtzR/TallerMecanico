@extends('templates.master')
@section('contenido_central')
<h1 align="center">Agregar tarjeta</h1>
@endsection()
@section('contenido_central2')	


	{!! Form::open (['url'=>'/comentarios']) !!} 

	<table align="center" width="auto">
	<tr>
	<td  >
	{!! Form::label ('id_usuario','Usuario') !!}
	{!! Form::select ('id_usuario',
	$users->pluck('correo','id')->all() 
	,null,['placeholder'=>'Seleccionar usuario ...','class'=>'form-control','required']) !!}	
	</td>
	</tr>
	<tr>
	<td >
	{!! Form::label ('fecha','Fecha') !!}	
	{!! Form::date ('fecha',0,['placeholder'=>'Seleccionar fecha ...','class'=>'form-control','required']) !!}
	<tr>
	<td width="400px" height="250px"  >
	{!! Form::label ('descripcion','Escribe un comentario de tu servicio') !!}
	{!! Form::textarea ('descripcion',null,['placeholder'=>'Escribe un comentario de tu servicio','class'=>'form-control','required']) !!}
	</td>
	</tr>

	
	{!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),'1',['placeholder'=>'Selecciona estatus de la tarjeta','class'=>'form-control','hidden']) !!} 


	</td>
	</tr>
</table>
	<br>
	<div align="center">
	{!! Form::submit('Agregar', ['class'=>'btn ']) !!}	
			{!! Form::close() !!}
	
	<a class="btn" href="{!! asset('comentarios') !!}">Regresar</a>
	
	</div>
	 
@endsection()
@section('contenido_central3')

@endsection()
@section('contenido_central4')
  
@endsection()
