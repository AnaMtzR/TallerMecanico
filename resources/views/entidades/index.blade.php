@extends('templates.master')
@section('contenido_central')
<h1 align="center">Entidades</h1>
@endsection()
@section('contenido_central2')

<div align="center">
	  <table id="tabla"  align="center"  >
        <thead>
			<tr align="center">
			<th>ID</th>
			<th>Nombre</th>
			<th>Status</th>
			<th>Acciones</th>
		</tr>
		<tbody>
		@foreach($entidad as $entidad)
		<tr>
			<td>{!! $entidad->id !!}</td>
			<td>{!! $entidad->nombre !!}</td>
			<td>{!! $entidad->status !!}</td>
			<td>
				<table>
					<tr>
						<td>
						<a class="btn btn-primary" href="{!! 'entidades/'.$entidad->id !!}">Detalle</a>
						</td>
						<td>
						<a class="btn btn-primary" href="{!! 'entidades/'.$entidad->id.'/edit' !!}">Editar</a>	
						</td>
						<td>
						{!! Form::open (['method'=>'DELETE','url'=>'/entidades/'.$entidad->id]) !!} 
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
	<table align="center">
		<tr>
			<td>
				<a  class="btn" href="entidades/create"> Agregar entidad</a>
			</td>
			<td>
				<a href="cruds" class="btn">Regresar</a>
			</td>
		</tr>
	</table>
	

</div>
@endsection()
@section('contenido_central3')

@endsection()
@section('contenido_central4')
  
@endsection()
