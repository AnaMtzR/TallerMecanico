@extends('templates.master')
@section('contenido_central')
<h1 align="center">Detalle de Consorcio</h1>
@endsection()
@section('contenido_central2')

<table align="center">
		<tr>
			<td>
<h2>ID:  </h2>
<p>{!! $tipos_consorcio->id !!}</p>
</td>
<td>
<h2>Nombre:</h2>
<p>{!! $tipos_consorcio->nombre !!}</p>
</td>
</tr>
<tr>
<td>
<h2>status:  </h2>
<p>{!! $tipos_consorcio->status !!}</p>
</td></tr>
</table>
<br>


  
<div align="center">
<a class="btn" href="{!! asset('tipos_consorcio') !!}">Regresar</a>
</div>

@endsection()
@section('contenido_central3')
  
@endsection()
