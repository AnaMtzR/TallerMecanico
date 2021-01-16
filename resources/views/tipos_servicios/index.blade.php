@extends('templates.master')
@section('contenido_central')
<h1 align="center">Tipos de Servicios</h1>
@endsection()
@section('contenido_central2')	

	
<table align="center"  >
		<tr >
			<tr align="center">
			<th>ID</th>
			<th>Nombre</th>
			<th>Descripción</th>
			<th>Precio</th>
			<th>Status</th>
			<th>Acciones</th>
		</tr>

		@foreach($tipos_servicios as $tp_servicio)
		<tr>
			<td>{!! $tp_servicio->id !!}</td>
			<td>{!! $tp_servicio->nombre !!}</td>
			<td>{!! $tp_servicio->descripcion !!}</td>
			<td>{!! $tp_servicio->precio !!}</td>
			<td>{!! $tp_servicio->status !!}</td>
			<td>	<table align="center">
					<tr>
						<td>
						<a href="{!! 'tipos_servicios/'.$tp_servicio->id !!}" class="btn btn-primary">Detalle</a>
					</td>
					<td>
						
						<a href="{!! 'tipos_servicios/'.$tp_servicio->id.'/edit' !!}"  class="btn btn-primary">Editar</a>
					</td>
					<td>
						{!! Form::open (['method'=>'DELETE','url'=>'/tipos_servicios/'.$tp_servicio->id]) !!} 
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
				<a href="tipos_servicios/create" class="btn"> Agregar servicio</a>
				<a href="cruds" class="btn">Regresar</a>
		</div>



@endsection()
@section('contenido_central3')

@endsection()
@section('contenido_central4')
  
@endsection()
