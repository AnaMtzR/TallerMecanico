@extends('templates.master')
@section('contenido_central')
<h1 align="center">Editar entidad</h1>
@endsection()
@section('contenido_central2')

{!! Form::open (['method'=>'PATCH','url'=>'/entidades/'.$entidad->id]) !!} 

<table style="width:50%" align="center">
	<tr>
		
		<td>
			{!! Form::label ('nombre','Nombre del entidad:') !!}	<br>
	{!! Form::text ('nombre',$entidad->nombre,['placeholder'=>'Ingresa nombre del entidad','class'=>'form-control']) !!}	
		</td>
	</tr>
	<tr>
		<td>
		{!! Form::label ('status','Status:') !!}<br>	
	{!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),$entidad->status,
	['placeholder'=>'Selecciona estatus del entidad','class'=>'form-control']) !!}
		</td>
	</tr>
</table>
<br>

<div align="center">
	{!! Form::submit('Guardar', ['class'=>'btn']) !!}	
	{!! Form::close() !!}	
<a class="btn" href="{!! asset('entidades') !!}">Regresar</a>
</div>


@endsection()
@section('contenido_central3')

@endsection()
@section('contenido_central4')
  
@endsection()
