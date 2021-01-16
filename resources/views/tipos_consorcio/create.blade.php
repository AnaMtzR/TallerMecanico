@extends('templates.master')
@section('contenido_central')
<h1 align="center">Agregar consorcio</h1>
@endsection()
@section('contenido_central2')	


	{!! Form::open (['url'=>'/tipos_consorcio']) !!} 

	<table align="center">
		<tr>
			<td>
	{!! Form::label ('nombre','Nombre consorcio') !!}<br>
	{!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre del consorcio','class'=>'form-control']) !!}
	</td>
	</tr>

	<tr><td>
	{!! Form::label ('status','Estatus') !!}	
	<br>
	{!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),'1',['placeholder'=>'Selecciona estatus del consorcio','class'=>'form-control']) !!}
	</td></tr>
</table>
	<br>
	<div align="center">
	{!! Form::submit('Agregar', ['class'=>'btn ']) !!}	
			{!! Form::close() !!}
	
	<a class="btn" href="{!! asset('tipos_consorcio') !!}">Regresar</a>
	
	</div>
	 
@endsection()
@section('contenido_central3')

@endsection()
@section('contenido_central4')
  
@endsection()
