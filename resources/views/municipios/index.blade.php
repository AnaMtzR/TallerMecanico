@extends('templates.master')
@section('contenido_central')
<h1 align="center">Municipios</h1>
<br>
@endsection()
@section('contenido_central2')
        
	<table align="center"   style="max-width:80%" >
		<tr >

			<th>ID</th>
			<th>Clave entidad</th>
			<th>Entidad</th>
			<th>Nombre</th>
			<th align="center">Acciones</th>
		</tr>
		@foreach($municipios as $municipios)
		<tr>
			<td>{!! $municipios->id !!}</td>
			<td>{!! $municipios->id_entidad !!}</td>
			<td>{!! $municipios->entidades->nombre !!}</td>
			<td>{!! $municipios->nombre !!}</td>
			<td align="center">
				<a class="btn btn-primary" href="{!! 'municipios/'.$municipios->id !!}">Detalle</a>
				<a class="btn btn-primary" href="{!! 'municipios/'.$municipios->id.'/edit' !!}">Editar</a>
				
			</td>
			<td>{!! Form::open (['method'=>'DELETE','url'=>'/municipios/'.$municipios->id]) !!} 
				{!! Form::submit('Eliminar', ['class'=>'btn btn-primary']) !!}	
				{!! Form::close() !!}
			</td>
		</tr>
		@endforeach
	</table>
	<br>

<div align="center">
	 <a class="btn " href="municipios/create">Agregar Municipio</a>
	 <a class="btn " href="cruds">Regresar</a>
</div>

@endsection()
@section('contenido_central3')


@endsection()
@section('contenido_central4')
  
@endsection()
