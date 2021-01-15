@extends('templates.master')
@section('contenido_central')
<h1 align="center">Editar  Servicio</h1>
@endsection()
@section('contenido_central2')	


	{!! Form::open (['method'=>'PATCH','url'=>'/fotos_servicio/'.$fotos_servicio->id]) !!} 

	<table align="center">
		<tr><td>
	
	{!! Form::label ('ruta','Archivo') !!}	<br>
	{!! Form::file ('ruta')!!}
	<br>
	{!! Form::label ('id_servicio','Servicio ') !!}	
	{!! Form::select ('id_servicio',
	$servicios->pluck('nombre','id')->all() 
	,$fotos_servicio->id_servicio,['placeholder'=>'Seleccionar ...','class'=>'form-control']) !!}

	{!! Form::label ('status','Estatus') !!}	
	{!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),$fotos_servicio->status,['placeholder'=>'Selecciona estatus del servicio','class'=>'form-control']) !!}
	</td>
	<td width="10px" block></td>
	<td>
	<img src="{!! asset('estilo/images/bg_3.jpg') !!}" width="300px" height="300px">
	</td>
	</tr>
	</table>
	<br>
	<div align="center">
	{!! Form::submit('Guardar',['class'=>'btn ']) !!}	
	{!! Form::close() !!}	
	<a class="btn" href="{!! asset('fotos_servicio') !!}">Regresar</a>
	</div>
	 
@endsection()
@section('contenido_central3')

@endsection()
@section('contenido_central4')
  
@endsection()
