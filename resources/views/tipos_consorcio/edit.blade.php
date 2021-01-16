@extends('templates.master')
@section('contenido_central')
<h1 align="center">Editar consorcio</h1>
@endsection()
@section('contenido_central2')	


	{!! Form::open (['method'=>'PATCH','url'=>'/tipos_consorcio/'.$tipos_consorcio->id]) !!} 

	<table align="center">
		<tr><td>
	{!! Form::label ('nombre','Nombre consorcio') !!}<br>
	{!! Form::text ('nombre',$tipos_consorcio->nombre,['placeholder'=>'Ingresa nombre del tipo','class'=>'form-control']) !!}
	</td></tr>
	<tr><td>
	{!! Form::label ('status','Estatus') !!}	
	<br>
	{!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),$tipos_consorcio->status,['placeholder'=>'Selecciona estatus del servicio','class'=>'form-control']) !!}
	</td></tr>
	</table>
	<br>
	<div align="center">
	{!! Form::submit('Guardar',['class'=>'btn ']) !!}	
	{!! Form::close() !!}	
	<a class="btn" href="{!! asset('tipos_consorcio') !!}">Regresar</a>
	</div>
	 
@endsection()
@section('contenido_central3')

@endsection()
@section('contenido_central4')
  
@endsection()
