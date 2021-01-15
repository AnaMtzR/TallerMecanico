@extends('templates.master')
@section('contenido_central')
<h1 align="center">Detalle de Cotización </h1>
@endsection()
@section('contenido_central2')

<table align="center">
<tr>
	<td>
	<h2>ID:  </h2>
	<p>{!! $cotizaciones->id !!}</p>
</td>
<td>
	<h2>Correo:</h2>
	<p>{!! $cotizaciones->correo !!}</p>
</td>
</tr>
<tr>
	<td width="400px">
	<h2>Descripción:  </h2>
	<p >{!! $cotizaciones->descripcion !!}</p>
</td>
<td>
	<h2>Fecha :</h2>
	<p>{!! $cotizaciones->fecha_inicio !!}</p>
</td>
</tr>
<tr>
	<td>
	<h2>Tipo de servicio:  </h2>
	<p>{!! $cotizaciones->tipos_servicios->nombre !!}</p>
</td>
<td>
	<h2>status:  </h2>
	<p>{!! $cotizaciones->status !!}</p>
</td>
</tr>
</table>
<br>


  
<div align="center">
<a class="btn" href="{!! asset('cotizaciones') !!}">Regresar</a>
</div>

@endsection()
@section('contenido_central3')
  
@endsection()
