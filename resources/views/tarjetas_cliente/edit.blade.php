@extends('templates.master')
@section('contenido_central')
<h1 align="center">Agregar tarjeta</h1>
@endsection()
@section('contenido_central2')	

{!! Form::open(['method'=>'PATCH','url'=>'/tarjetas_cliente/'.$tarjetas_cliente->id]) !!} 

	<table align="center" width="auto">
	<tr>
	<td  width="400px" >
	{!! Form::label ('id_usuario','Usuario') !!}
	{!! Form::select ('id_usuario',
	$users->pluck('correo','id')->all() 
	,$tarjetas_cliente->id_usuario,['placeholder'=>'Seleccionar usuario ...','class'=>'form-control']) !!}	
	
	{!! Form::label ('no_tarjeta','No de Tarjeta') !!}
	{!! Form::number ('no_tarjeta',$tarjetas_cliente->no_tarjeta,['placeholder'=>'Ingresa tu numero de tarjeta','class'=>'form-control']) !!}

	{!! Form::label ('cvr','CVR') !!}
	{!! Form::text ('cvr',$tarjetas_cliente->cvr,['placeholder'=>'Ingresa clave de tarjeta','class'=>'form-control']) !!}

	{!! Form::label ('mes','Mes') !!}	
	{!! Form::select ('mes',array('1'=>'Enero','2'=>'Febrero','3'=>'Marzo','4'=>'Abril','5'=>'Mayo','6'=>'Junio','7'=>'Julio','8'=>'Agosto','9'=>'Septiembre','10'=>'Octubre','11'=>'Noviembre','12'=>'Diciembre'),$tarjetas_cliente->mes,['placeholder'=>'Selecciona un mes','class'=>'form-control']) !!}
	
	</td>
	<td block ></td>
	<td   width="400px" >
	
	{!! Form::label ('anio','Año') !!}	
	{!! Form::number ('anio',$tarjetas_cliente->anio,['placeholder'=>'Seleccionar ...','class'=>'form-control']) !!}

	{!! Form::label ('id_banco','Banco') !!}
	{!! Form::select ('id_banco',
	$tipos_banco->pluck('nombre','id')->all() 
	,$tarjetas_cliente->id_banco,['placeholder'=>'Seleccionar ...','class'=>'form-control']) !!}
	
	{!! Form::label ('id_consorcio','Consorcio') !!}
	{!! Form::select ('id_consorcio',
	$tipos_consorcio->pluck('nombre','id')->all() 
	,$tarjetas_cliente->id_consorcio,['placeholder'=>'Seleccionar ...','class'=>'form-control']) !!}

	{!! Form::label ('status','Estatus') !!}	
	{!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),$tarjetas_cliente->status,['placeholder'=>'Selecciona estatus de la tarjeta','class'=>'form-control']) !!} 


	</td>
	</tr>
</table>
	<br>
	<div align="center">
	{!! Form::submit('Guardar', ['class'=>'btn ']) !!}	
			{!! Form::close() !!}
	
	<a class="btn" href="{!! asset('tarjetas_cliente') !!}">Regresar</a>
	
	</div>
	 
@endsection()
@section('contenido_central3')

@endsection()
@section('contenido_central4')
  
@endsection()
