@extends('templates.master')
@section('contenido_central')
<h1 align="center">Agregar reserva</h1>
@endsection()
@section('contenido_central2')	


	{!! Form::open (['url'=>'/reservas_servicio']) !!} 

	<table align="center" width="auto">
	<tr>
	<td  width="400px" >
	{!! Form::label ('id_servicio','Servicio ') !!}	
	{!! Form::select ('id_tipo_serv',
	$tipos_servicio->pluck('nombre','id')->all()
	,null,['placeholder'=>'Seleccionar ...','class'=>'form-control']) !!}	

	{!! Form::label ('id_usuario','Usuario') !!}
	{!! Form::select ('id_cliente',
	$users->pluck('correo','id')->all() 
	,null,['placeholder'=>'Seleccionar usuario ...','class'=>'form-control']) !!}	

{!! Form::label ('id_tarjeta','Tarjeta') !!}
	{!! Form::select ('id_tarjeta',
	$tarjetas_clientes->pluck('no_tarjeta','id')->all() 
	,null,['placeholder'=>'Seleccionar tarjeta...','class'=>'form-control']) !!}

	{!! Form::label ('fecha','Fecha') !!}
	{!! Form::date ('fecha_inicio',null,['placeholder'=>'Selecciona una fecha','class'=>'form-control']) !!}

	{!! Form::label ('hora','Hora') !!}	
	{!! Form::select ('hora',array('9'=>'9 am ','10'=>'10am','11'=>'11am','12'=>'12pm','13'=>'1pm','14'=>'2pm','15'=>'3pm','16'=>'4pm','17'=>'5pm'),'null',['placeholder'=>'Selecciona una hora','class'=>'form-control']) !!}
	
	

	
	</td>
	<td block ></td>
	<td   width="400px" >
	{!! Form::label ('iva','Iva') !!}	
	{!! Form::number ('iva','15',['placeholder'=>'Seleccionar ...','class'=>'form-control']) !!}
		
	

	{!! Form::label ('tot','Total') !!}
	{!! Form::number ('total',
	null,['placeholder'=>'Total a pagar ...','class'=>'form-control']) !!}
	

	{!! Form::label ('status','Estatus') !!}	
	{!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),'1',['placeholder'=>'Selecciona estatus de la tarjeta','class'=>'form-control']) !!} 


	</td>
	</tr>
</table>
	<br>
	<div align="center">
	{!! Form::submit('Agregar', ['class'=>'btn ']) !!}	
			{!! Form::close() !!}
	
	<a class="btn" href="{!! asset('reservas_servicio') !!}">Regresar</a>
	
	</div>
	 
@endsection()
@section('contenido_central3')

@endsection()
@section('contenido_central4')
  
@endsection()
