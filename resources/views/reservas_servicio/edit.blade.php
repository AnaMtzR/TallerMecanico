@extends('templates.master')
@section('contenido_central')
<h1 align="center">Editar reserva</h1>
@endsection()
@section('contenido_central2')	


	{!! Form::open (['method'=>'PATCH','url'=>'/reservas_servicio/'.$reservas_servicio->id]) !!} 
<table align="center">
	<tr><td colspan="2">
		{!! Form::label ('id_servicio','Servicio ') !!}	
	{!! Form::select ('id_tipo_serv',
	$tipos_servicio->pluck('nombre','id')->all()
	,$reservas_servicio->id_tipo_serv,['placeholder'=>'Seleccionar ...','class'=>'form-control']) !!}
	</td></tr>
	<tr>
		<td>{!! Form::label ('id_usuario','Usuario') !!}
	{!! Form::select ('id_cliente',
	$users->pluck('correo','id')->all() 
	,$reservas_servicio->id_cliente,['placeholder'=>'Seleccionar usuario ...','class'=>'form-control']) !!}</td>
		<td>{!! Form::label ('id_tarjeta','Tarjeta') !!}
	{!! Form::select ('id_tarjeta',
	$tarjetas_clientes->pluck('no_tarjeta','id')->all() 
	,$reservas_servicio->id_tarjeta,['placeholder'=>'Seleccionar tarjeta...','class'=>'form-control']) !!}</td>
	</tr>
	<tr>
	<td>{!! Form::label ('fecha','Fecha') !!}
	{!! Form::date ('fecha_inicio',$reservas_servicio->fecha_inicio,['placeholder'=>'Selecciona una fecha','class'=>'form-control']) !!}
	</td>
	<td>{!! Form::label ('hora','Hora') !!}	
	{!! Form::select ('hora',array('9'=>'9 am ','10'=>'10am','11'=>'11am','12'=>'12pm','13'=>'1pm','14'=>'2pm','15'=>'3pm','16'=>'4pm','17'=>'5pm'),$reservas_servicio->hora,['placeholder'=>'Selecciona una hora','class'=>'form-control']) !!}
	</td>
	</tr>
	<tr>
		<td>{!! Form::label ('iva','Iva') !!}	
	{!! Form::number ('iva',$reservas_servicio->iva,['placeholder'=>'Seleccionar ...','class'=>'form-control']) !!}
	</td>	
	
<td>
	{!! Form::label ('tot','Total') !!}
	{!! Form::number ('total',
	$reservas_servicio->total,['placeholder'=>'Total a pagar ...','class'=>'form-control']) !!}</td>
	</tr>
	<tr>
		<td colspan="2">{!! Form::label ('status','Estatus') !!}	
	{!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),$reservas_servicio->status,['placeholder'=>'Selecciona estatus de la tarjeta','class'=>'form-control']) !!} </td>
	</tr>
</table>
	<br>
	<div align="center">
	{!! Form::submit('Guardar', ['class'=>'btn ']) !!}	
			{!! Form::close() !!}
	
	<a class="btn" href="{!! asset('reservas_servicio') !!}">Regresar</a>
	
	</div>
	 
@endsection()
@section('contenido_central3')



@endsection()
@section('contenido_central4')
  
@endsection()
