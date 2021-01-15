@extends('templates.master')
@section('contenido_central')
<h1 align="center">Editar  Servicio</h1>
@endsection()
@section('contenido_central2')	


	{!! Form::open (['method'=>'PATCH','url'=>'/tipos_servicios/'.$tipos_servicios->id]) !!} 

	<table align="center">
		<tr><td>
	{!! Form::label ('nombre','Nombre servicio') !!}<br>
	{!! Form::text ('nombre',$tipos_servicios->nombre,['placeholder'=>'Ingresa nombre del tipo','class'=>'form-control']) !!}
	
	{!! Form::label ('precio','Precio del servico') !!}<br>
	{!! Form::number ('precio',$tipos_servicios->precio,['placeholder'=>'Ingresa una breve descripcion del servicio','class'=>'form-control']) !!}
	
	{!! Form::label ('status','Status') !!}	
	<br>
	{!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),$tipos_servicios->status,['placeholder'=>'Selecciona estatus del servicio','class'=>'form-control']) !!}
	</td>
	<td width="10px" block></td>

	<td>
	{!! Form::label ('descripcion','Descripcion del servicio') !!}<br>
	{!! Form::textarea ('descripcion',$tipos_servicios->descripcion,['placeholder'=>'Ingresa la descripcion del servicio','class'=>'form-control']) !!}
	</td>
</tr>
	</table>
	<br>
	<div align="center">
	{!! Form::submit('Guardar',['class'=>'btn ']) !!}	
	{!! Form::close() !!}	
	<a class="btn" href="{!! asset('tipos_servicios') !!}">Regresar</a>
	</div>
	 
@endsection()
@section('contenido_central3')

@endsection()
@section('contenido_central4')
  
@endsection()
