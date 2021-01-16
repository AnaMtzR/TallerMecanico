

@extends('templates.master')
@section('contenido_central')
<h1 align="center">Detalle de Banco</h1>
@endsection()
@section('contenido_central2')

<table align="center">
		<tr>
			<td>
			<h2>ID:  </h2>
			<p>{!! $tipos_banco->id !!}</p>			
		</td>
		<tr>
			<td>
			<h2>Nombre:</h2>
			<p>{!! $tipos_banco->nombre !!}</p>
			</td>
		</tr>
		<tr>
			<td>
			<h2>status:  </h2>
			<p>{!! $tipos_banco->status !!}</p>
			</td>
		</tr>
		
	</table>

	<div align="center">
		<a class="btn "  href="{!! asset('tipos_banco') !!}">Regresar</a>
	</div>

@endsection()
@section('contenido_central4')
  
@endsection()
