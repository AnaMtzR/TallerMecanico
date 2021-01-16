@extends('templates.master')
@section('contenido_central')
<h1 align="center">Detalle de tarjetas cliente </h1>
@endsection()
@section('contenido_central2')

<table align="center">
<tr align="center"><td colspan="2"> <h2>Dueño:{!! $tarjetas_cliente->users->username !!}</h2></td></tr>
<tr>
	<td>

	<h2>ID:  </h2>
	<p>{!! $tarjetas_cliente->id !!}</p>
</td>
<td>
	<h2>No de tarjeta:</h2>
	<p>{!! $tarjetas_cliente->no_tarjeta !!}</p>
</td>
</tr>
<tr>
	<td width="400px">
	<h2>Banco:  </h2>
	<p >{!! $tarjetas_cliente->tipos_banco->nombre !!}</p>
</td>
<td>
	<h2>Consorcio :</h2>
	<p>{!! $tarjetas_cliente->tipos_consorcio->nombre !!}</p>
</td>
</tr>
<tr>
	<td>
	<h2>Mes y año de vencimiento:  </h2>
	<p>{!! $tarjetas_cliente->mes!!}/{!! $tarjetas_cliente->anio!!}</p>
</td>
<td>
	<h2>status:  </h2>
	<p>{!! $tarjetas_cliente->status !!}</p>
</td>
</tr>
</table>
<br>


  
<div align="center">
<a class="btn" href="{!! asset('tarjetas_cliente') !!}">Regresar</a>
</div>

@endsection()
@section('contenido_central3')
  
@endsection()
