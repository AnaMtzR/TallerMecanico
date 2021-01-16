@extends('templates.master')
@section('contenido_central')
<h1 align="center">Editar banco</h1>
@endsection()
@section('contenido_central2')	

 
	{!! Form::open (['method'=>'PATCH','url'=>'/tipos_banco/'.$tipos_banco->id]) !!} 

	<table align="center">
		<tr><td>
	{!! Form::label ('nombre','Nombre banco') !!}<br>
	{!! Form::text ('nombre',$tipos_banco->nombre,['placeholder'=>'Ingresa nombre del tipo','class'=>'form-control']) !!}
</td></tr>
<tr><td>
	{!! Form::label ('status','Estatus') !!}	
	<br>
	{!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),$tipos_banco->status,['placeholder'=>'Selecciona estatus del servicio','class'=>'form-control']) !!}
	</td></tr>
</table>
<div align="center">
	{!! Form::submit('Guardar',['class'=>'btn']) !!}	
	{!! Form::close() !!}	
	<a href="{!! asset('tipos_banco') !!}" class="btn">Regresar</a>

</div>
	 
@endsection()
@section('contenido_central3')

@endsection()
@section('contenido_central4')
  
@endsection()
