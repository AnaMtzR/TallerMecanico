@extends('templates.master')
@section('contenido_central')
<h1 align="center">Tipos de usuarios</h1>
@endsection()
@section('contenido_central2')

	
	<table align="center">
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Acciones</th>
		</tr>
		@foreach($tipos_banco as $tp_banco)
		<tr>
			<td>{!! $tp_banco->id !!}</td>
			<td>{!! $tp_banco->nombre !!}</td>
			<td>

				<a class="btn btn-primary" href="{!! 'tipos_banco/'.$tp_banco->id !!}">Detalle</a>
				<a class="btn btn-primary" href="{!! 'tipos_banco/'.$tp_banco->id.'/edit' !!}">Editar</a>
				
			</td>
			<td>
			{!! Form::open (['method'=>'DELETE','url'=>'/tipos_banco/'.$tp_banco->id]) !!} 
			{!! Form::submit('Eliminar',['class'=>'btn btn-primary']) !!}	
			{!! Form::close() !!}	
			</td>
		</tr>
		@endforeach
	</table>
	
	<br>
	<div align="center">
	<a class="btn" href="tipos_banco/create"> Agregar Banco</a>
	<a class="btn" href="{!! asset('cruds') !!}">Regresar</a>
	</div>

@endsection()
@section('contenido_central3')

@endsection()
@section('contenido_central4')
  
@endsection()
