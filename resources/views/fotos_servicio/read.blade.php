@extends('templates.master')
@section('contenido_central')
<h1 align="center">Detalle de Foto</h1>
@endsection()
@section('contenido_central2')

<table align="center" width="50%">
<tr>
	<td>
	<h2>ID:  </h2>
	<p>{!! $fotos_servicio->id !!}</p>

	<h2>Ruta:</h2>
	<p>{!! $fotos_servicio->ruta !!}</p>

	<h2>Servicio:</h2>
	<p>{!! $fotos_servicio->tipos_servicios->nombre !!}</p>
	<h2>status:  </h2>
	<p>{!! $fotos_servicio->status !!}</p>
</td>
<td width="10px" block></td>
<td>
	
	<h2>Vista previa:  </h2>
	<p><img src="{!! asset('estilo/images/bg_3.jpg') !!}" width="300px" height="310px"></p>
</td>
</tr>
</table>
<br>


  
<div align="center">
<a class="btn" href="{!! asset('fotos_servicio') !!}">Regresar</a>
</div>

@endsection()
@section('contenido_central3')
  
@endsection()
