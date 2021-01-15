@extends('templates.master')
@section('contenido_central')
<h1 align="center">Agregar entidad</h1>
@endsection()
@section('contenido_central2')
	{!! Form::open (['url'=>'/entidades']) !!} 

<table style="width:50%" align="center">
	<tr>
		
		<td>
		{!! Form::label ('nombre','Nombre de entidad') !!}<br>
	{!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre del entidad','class'=>'form-control']) !!}	
		</td>
	</tr>
	<tr>
		<td>
		{!! Form::label ('status','Estatus') !!}	<br>
	{!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),'1',['placeholder'=>'Selecciona estatus del entidad','class'=>'form-control']) !!}
		</td>
	</tr>
</table>
<br>

<div align="center">
	{!! Form::submit('Agregar' ,['class'=>'btn']) !!}	
	{!! Form::close() !!}	
<a class="btn"  href="{!! asset('entidades') !!}">Regresar</a>
</div>


@endsection()
@section('contenido_central3')

@endsection()
@section('contenido_central4')
  
@endsection()
