@extends('templates.master')
@section('contenido_central')
<h1 align="center">Detalle de Reserva </h1>
@endsection()
@section('contenido_central2')
<br>
<h3 align="center">Dueño:{!! $reservas_servicio->users->username !!}</h3>
<hr>
<table align="center" width="60%" >
<tr  >
	<td>
	<h5>ID:  </h5>
	<p>{!! $reservas_servicio->id !!}</p>
</td>
<td >
<h5>Servicio  </h5>
	<p>{!! $reservas_servicio->tipos_servicios->nombre !!}</p>
</td>
<td>
	<h5>No de tarjeta:</h5>
	<p>{!! $reservas_servicio->tarjetas_cliente->no_tarjeta !!}</p>
</td>
	<td >
		<h5>Fecha </h5>
		<p>{!! $reservas_servicio->fecha_inicio !!}</p>
	</td>
</tr>
<tr  >

	<td>
		<h5>Hora</h5>
		<p>{!! $reservas_servicio->hora !!}</p>
	</td>
	<td><h5>Iva:  </h5>
	<p>{!! $reservas_servicio->iva !!}</p>
</td>
<td ><h5>Total  </h5>
	<p>{!! $reservas_servicio->total !!}</p>
</td>

<td >
	<h5>Estatus:  </h5>
	<p>{!! $reservas_servicio->status !!}</p>
</td>
</tr>


</table>
<br>


  
<div align="center">
<a class="btn" href="{!! asset('reservas_servicio') !!}">Regresar</a>
</div>

@endsection()
@section('contenido_central3')
  
@endsection()
