@extends('templates.master')
@section('contenido_central')
<h1 align="center">Comentarios del servicio</h1>
@endsection()
@section('contenido_central2')	

	
<table align="center" width="90%"  >
		<tr >
			<tr align="center">
			<th>ID</th>
			<th>Usuario</th>
			<th>Descripcion</th>
			<th>Fecha</th>
			<th>Acciones</th>
		</tr>

		@foreach($comentarios as $comentarios)
		<tr>
			<td>{!! $comentarios->id !!}</td>
			<td>{!! $comentarios->users->username !!}</td>
			<td height="auto" style="text-align: justify" width="620px">{!! $comentarios->descripcion !!}</td>
			<td>{!! $comentarios->fecha !!}</td>
			<td>	<table align="center">
					<tr>
						<td>
						<a href="{!! 'comentarios/'.$comentarios->id !!}" class="btn btn-primary">Detalle</a>
					</td>
					<td>
					<a href="{!! 'comentarios/'.$comentarios->id.'/edit' !!}"  class="btn btn-primary">Editar</a>

					</td>
					<td>
						{!! Form::open (['method'=>'DELETE','url'=>'/comentarios/'.$comentarios->id]) !!} 
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
				<a href="comentarios/create" class="btn"> Agregar comentario</a>
				<a href="cruds" class="btn">Regresar</a>
		</div>



@endsection()
@section('contenido_central3')

@endsection()
@section('contenido_central4')
  
@endsection()
