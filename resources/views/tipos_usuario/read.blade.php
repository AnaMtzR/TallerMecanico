@extends('templates.master')
@section('contenido_central')
<h1 align="center">Detalle de tipo de usuarios</h1>
@endsection()
@section('contenido_central2')

<table align="center">
		<tr>
			<td>
			<h2>ID:  </h2>
			<p>{!! $tipos_usuario->id !!}</p>			
		</td>
		<tr>
			<td>
			<h2>Nombre:</h2>
			<p>{!! $tipos_usuario->nombre !!}</p>
			</td>
		</tr>
		<tr>
			<td>
			<h2>status:  </h2>
			<p>{!! $tipos_usuario->status !!}</p>
			</td>
		</tr>
		
	</table>

	<div align="center">
		<a class="btn "  href="{!! asset('tipos_usuario') !!}">Regresar</a>
	</div>

@endsection()
@section('contenido_central4')
  
@endsection()
