@extends('templates.master')
@section('contenido_central')
<h1 align="center">Fotos del taller</h1>
@endsection()
@section('contenido_central2')	

	
<table align="center" width="80%" >
		<tr >
			<tr align="center">
			<th>ID</th>
			<th>Servicio</th>
			<th>Ruta</th>
			<th>Imagen</th>
			<th colspan="2">Acciones </th>
		</tr>

		@foreach($fotos_servicio as $fotos_servicio)
		<tr>
			<td>{!! $fotos_servicio->id !!}</td>
			<td>{!! $fotos_servicio->tipos_servicios->nombre !!}</td>
			<td>{!! $fotos_servicio->ruta !!}</td>
			<td ><img src="{!! asset('estilo/images/bg_3.jpg') !!}" width="100px" width="100px"></td>

			<td>	<table align="center">
					<tr>
						<td>
						<a href="{!! 'fotos_servicio/'.$fotos_servicio->id !!}" class="btn btn-primary">Detalle</a>
					</td>
					<td>
						
						<a href="{!! 'fotos_servicio/'.$fotos_servicio->id.'/edit' !!}"  class="btn btn-primary">Editar</a>
					</td>
					<td>
						{!! Form::open (['method'=>'DELETE','url'=>'/fotos_servicio/'.$fotos_servicio->id]) !!} 
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
				<a href="fotos_servicio/create" class="btn"> Agregar foto</a>
				<a href="cruds" class="btn">Regresar</a>
		</div>



@endsection()
@section('contenido_central3')

@endsection()
@section('contenido_central4')
  
@endsection()
