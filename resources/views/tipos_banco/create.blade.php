@extends('templates.master')
@section('contenido_central')
<h1 align="center">Agregar banco</h1>
@endsection()
@section('contenido_central2')	



	{!! Form::open (['url'=>'/tipos_banco']) !!} 
	<table align="center">
		<tr><td>
	{!! Form::label ('nombre','Nombre banco') !!}<br>
	{!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre del tipo','class'=>'form-control']) !!}
	</td></tr>
<tr><td>
	{!! Form::label ('status','Estatus') !!}	
	<br>
	{!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),'1',['placeholder'=>'Selecciona estatus del servicio','class'=>'form-control']) !!}
	</td></tr>
</table>
<div align="center">
	{!! Form::submit('Agregar',['class'=>'btn']) !!}	
	{!! Form::close() !!}	
	<a class="btn" href="{!! asset('tipos_banco') !!}">Regresar</a>
</div>
	
		 
@endsection()
@section('contenido_central3')

@endsection()
@section('contenido_central4')
  
@endsection()
