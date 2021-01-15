@extends('templates.master')
@section('contenido_central')
<h1 align="center">Agregar cotización</h1>
@endsection()
@section('contenido_central2')	


	{!! Form::open (['url'=>'/cotizaciones']) !!} 

	<table align="center" width="auto">
	<tr>
	<td  width="400px" >
	{!! Form::label ('correo','Correo Electronico') !!}<br>
	{!! Form::email ('correo',null,['placeholder'=>'Ingresa tu correo','class'=>'form-control']) !!}
	{!! Form::label ('fecha_inicio','Fecha de cotización') !!}<br>
	{!! Form::date ('fecha_inicio',null,['placeholder'=>'Ingresa nombre del tipo','class'=>'form-control']) !!}
	
	{!! Form::label ('id_servicio','Servicio a cotizar') !!}	
	{!! Form::select ('id_servicio',
	$servicios->pluck('nombre','id')->all() 
	,null,['placeholder'=>'Seleccionar ...','class'=>'form-control']) !!}
	{!! Form::label ('status','Estatus') !!}	
	{!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),'1',['placeholder'=>'Selecciona estatus del servicio','class'=>'form-control']) !!}
	
	</td>
	<td block height="400px"></td>
	<td width="200px" height="310px"  >
	

	{!! Form::label ('descripcion','Descripcion del servicio') !!}<br>
	{!! Form::textarea ('descripcion',null,['placeholder'=>'Ingresa la descripcion del servicio','class'=>'form-control']) !!}
	</td>
	</tr>
</table>
	<br>
	<div align="center">
	{!! Form::submit('Agregar', ['class'=>'btn ']) !!}	
			{!! Form::close() !!}
	
	<a class="btn" href="{!! asset('cotizaciones') !!}">Regresar</a>
	
	</div>
	 
@endsection()
@section('contenido_central3')

@endsection()
@section('contenido_central4')
  
@endsection()
