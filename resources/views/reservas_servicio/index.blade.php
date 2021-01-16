@extends('templates.master')
@section('contenido_central')
<h1 align="center">Reservas</h1>
@endsection()
@section('contenido_central2')	

	
<table id="example" class="display" width="80%" align="center">
		<thead>
		<tr >
			<tr align="center">
			<th>ID</th>
			<th>Servicio</th>
			<th>Cliente</th>
			<th>Hora-Fecha</th>
			<th>No.Tarjeta</th>
			<th>Total</th>
			<th>Estado</th>
			<th>Acciones</th>
		</tr>
</thead>
<tbody>
		@foreach($reservas_servicio as $reservas_servicio)
		<tr>
			<td>{!! $reservas_servicio->id !!}</td>
			<td>{!! $reservas_servicio->tipos_servicios->nombre !!}</td>
			<td>{!! $reservas_servicio->users->username !!}</td>
			<td>{!! $reservas_servicio->hora !!}-{!! $reservas_servicio->fecha_inicio !!}</td>
			<td>{!! $reservas_servicio->tarjetas_cliente->no_tarjeta !!}</td>
			<td>{!! $reservas_servicio->total !!}</td>
			<td>{!! $reservas_servicio->status !!}</td>
			<td>	<table align="center">
					<tr>
						<td>
						<a href="{!! 'reservas_servicio/'.$reservas_servicio->id !!}" class="btn btn-primary">Detalle</a>
					</td>
					<td>
					<a href="{!! 'reservas_servicio/'.$reservas_servicio->id.'/edit' !!}"  class="btn btn-primary">Editar</a>

					</td>
					<td>
						{!! Form::open (['method'=>'DELETE','url'=>'/reservas_servicio/'.$reservas_servicio->id]) !!} 
						{!! Form::submit('Eliminar', ['class'=>'btn btn-primary']) !!}	
						{!! Form::close() !!}
						</td>
					</tr>
				</table>
			</td>
		</tr>
		
		@endforeach
		</tbody>
	</table>
	<br>
	<div align="center">
				<a href="reservas_servicio/create" class="btn"> Agregar Reserva</a>
				<a href="cruds" class="btn">Regresar</a>
		</div>



@endsection()
@section('contenido_central3')

@endsection()
@section('contenido_central4')
  
@endsection()
