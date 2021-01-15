@extends('templates.master')
@section('contenido_central')
<h1 align="center">Agregar consorcio</h1>
@endsection()
@section('contenido_central2')	


	{!! Form::open (['url'=>'/tipos_servicios']) !!} 

	<table align="center">
	<tr>
	<td>
	{!! Form::label ('nombre','Nombre de Servicio') !!}<br>
	{!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre del tipo','class'=>'form-control']) !!}
	
	{!! Form::label ('precio','Precio del servico') !!}<br>
	{!! Form::number ('precio',null,['placeholder'=>'Ingresa una breve descripcion del servicio','class'=>'form-control']) !!}

	{!! Form::label ('status','Estatus') !!}	
	<br>
	{!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),'1',['placeholder'=>'Selecciona estatus del servicio','class'=>'form-control']) !!}
	</td>
	<td block width="10px"></td>
	<td>
	{!! Form::label ('descripcion','Descripcion del servicio') !!}<br>
	{!! Form::textarea ('descripcion',null,['placeholder'=>'Ingresa la descripcion del servicio','class'=>'form-control']) !!}
	</td>
	</tr>
</table>
	<br>
	<div align="center">
	{!! Form::submit('Agregar', ['class'=>'btn ']) !!}	
			{!! Form::close() !!}
	
	<a class="btn" href="{!! asset('tipos_servicios') !!}">Regresar</a>
	
	</div>
	 
@endsection()
@section('contenido_central3')

@endsection()
@section('contenido_central4')
  
@endsection()
