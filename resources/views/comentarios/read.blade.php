@extends('templates.master')
@section('contenido_central')
<h1 align="center">Comentario de cliente </h1>
@endsection()
@section('contenido_central2')

<table align="center">
<tr align="center"><td colspan="2"> <h2>Dueño:{!! $comentarios->users->correo !!}</h2></td></tr>
<tr>
	<td>

	<h5>ID:  </h5>
	<p>{!! $comentarios->id !!}</p>
</td>
<td>
	<h5>Fecha:</h5>
	<p>{!! $comentarios->fecha !!}</p>
</td>
</tr>
<tr>
	<td width="400px" colspan="2" style="text-align: justify" width="620px">
	<h5>Comentario:  </h5>
	<p >{!! $comentarios->descripcion !!}</p>
</td>
</tr>
<tr>
<td  colspan="2">
	<h5>status:  </h5>
	<p>{!! $comentarios->status !!}</p>
</td>
</tr>
</table>
<br>


  
<div align="center">
<a class="btn" href="{!! asset('comentarios') !!}">Regresar</a>
</div>

@endsection()
@section('contenido_central3')
  
@endsection()
