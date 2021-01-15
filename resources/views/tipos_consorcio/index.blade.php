@extends('templates.master')
@section('contenido_central')
<h1 align="center">Tipos consorcio</h1>
@endsection()
@section('contenido_central2')	

	
<table align="center"  >
		<tr >
			<tr align="center">
			<th>ID</th>
			<th>Nombre</th>
			<th>Acciones</th>
		</tr>

		@foreach($tipos_consorcio as $tp_consorcio)
		<tr>
			<td>{!! $tp_consorcio->id !!}</td>
			<td>{!! $tp_consorcio->nombre !!}</td>
			<td>	<table align="center">
					<tr>
						<td>
						<a href="{!! 'tipos_consorcio/'.$tp_consorcio->id !!}" class="btn btn-primary">Detalle</a>
					</td>
					<td>
						
						<a href="{!! 'tipos_consorcio/'.$tp_consorcio->id.'/edit' !!}"  class="btn btn-primary">Editar</a>
					</td>
					<td>
						{!! Form::open (['method'=>'DELETE','url'=>'/tipos_consorcio/'.$tp_consorcio->id]) !!} 
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
				<a href="tipos_consorcio/create" class="btn"> Agregar consorcio</a>
				<a href="cruds" class="btn">Regresar</a>
		</div>



@endsection()
@section('contenido_central3')

@endsection()
@section('contenido_central4')
  
@endsection()
