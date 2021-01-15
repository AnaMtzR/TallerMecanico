@extends('templates.master')
@section('contenido_central')
<h1 align="center">Detalle municipio</h1>
<br>
@endsection()
@section('contenido_central2')
<table align="center" style="width:50%">
	<tr>
		<td>
		<h3>Id: </h3>
		<p>{!! $municipio->id !!} </p>
		</td>
		<td>
		<h3>Entidad:</h3>
		<p>{!! $municipio->entidades->nombre !!}</p>
		</td>
	</tr>
	<tr>
		<td>
		<h3>Nombre: </h3>
		<p>{!! $municipio->nombre !!}</p>
		</td>
		<td>
		<h3>Status: </h3>
		<p>{!! $municipio->status !!}</p>
		</td>
	</tr>
</table>
			
<br>
<br>

<div align="center">
<a  class="btn btn-primary" href="{!! asset('municipios') !!}" >Regresar</a>
</div>
	


@endsection()
@section('contenido_central3')


@endsection()
@section('contenido_central4')
  
@endsection()
