@extends('templates.master')
@section('contenido_central')
<h1 align="center">Tarjetas</h1>
@endsection()
@section('contenido_central2')	

	
<table align="center"  width="80%"  >
		<tr >
			<tr align="center">
			<th>ID</th>
			<th>Usuario</th>
			<th>Banco</th>
			<th>Consorcio</th>
			<th>No. Tarjeta</th>
			<th>Mes-Año </th>
			<th>Acciones</th>
		</tr>

		@foreach($tarjetas_cliente as $tarjetas_cliente)
		<tr>
			<td>{!! $tarjetas_cliente->id !!}</td>
			<td>{!! $tarjetas_cliente->users->username !!}</td>
			<td>{!! $tarjetas_cliente->tipos_banco->nombre !!}</td>
			<td>{!! $tarjetas_cliente->tipos_consorcio->nombre !!}</td>
			<td>{!! $tarjetas_cliente->no_tarjeta !!}</td>
			<td>{!! $tarjetas_cliente->mes !!}/{!! $tarjetas_cliente->anio !!}</td>
			<td>	<table align="center">
					<tr>
						<td>
						<a href="{!! 'tarjetas_cliente/'.$tarjetas_cliente->id !!}" class="btn btn-primary">Detalle</a>
					</td>
					<td>
					<a href="{!! 'tarjetas_cliente/'.$tarjetas_cliente->id.'/edit' !!}"  class="btn btn-primary">Editar</a>

					</td>
					<td>
						{!! Form::open (['method'=>'DELETE','url'=>'/tarjetas_cliente/'.$tarjetas_cliente->id]) !!} 
						{!! Form::submit('Eliminar', ['class'=>'btn btn-primary']) !!}	
						{!! Form::close() !!}
						</td>
					</tr>
				</table>
			</td>
		</tr>
		
		@endforeach
	</table>
	<br>
	<div align="center">
				<a href="tarjetas_cliente/create" class="btn"> Agregar Tarjeta</a>
				<a href="cruds" class="btn">Regresar</a>
		</div>



@endsection()
@section('contenido_central3')

@endsection()
@section('contenido_central4')
  
@endsection()
