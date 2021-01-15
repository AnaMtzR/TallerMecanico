@extends('templates.master')
@section('contenido_central')
<h1 align="center">Entidad</h1>
@endsection()
@section('contenido_central2')
<div style="width:80%" align="center">
			<h3>Id:</h3>
			<p> {!! $entidad->id !!} </p>
			<br>
			<h3>Nombre:</h3>
			 <p>{!! $entidad->nombre !!}</p>
	</div>
<br>

<div align="center">
	<a class="btn" href="{!! asset('entidades') !!}">Regresar</a>
</div>


@endsection()
@section('contenido_central3')

@endsection()
@section('contenido_central4')
  
@endsection()