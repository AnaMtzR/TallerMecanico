@extends('templates.master')
@section('contenido_central')
<h1 align="center">Agregar tipo de usuarios</h1>
@endsection()
@section('contenido_central2')


	<table align="center">
		<tr>

	{!! Form::open (['url'=>'/tipos_usuario']) !!} 
	<td>
	{!! Form::label ('nombre','Nombre usuario') !!}<br>
	{!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre del tipo','class'=>'form-control']) !!}
	</td>
</tr>
<tr>
	<td>
	{!! Form::label ('status','Estatus') !!}	
	<br>
	{!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),'1',['placeholder'=>'Selecciona estatus del servicio','class'=>'form-control']) !!}	
	</td>

</tr>
</table>
<br>

@endsection()
@section('contenido_central3')
<table align="center">
		<tr>
			<td>
			
			{!! Form::submit('Agregar', ['class'=>'btn ']) !!}	
			{!! Form::close() !!}	
		</td>
			<td>
				<a class="btn "  href="{!! asset('tipos_usuario') !!}">Regresar</a>
			</td>
		</tr>
	</table>



@endsection()
@section('contenido_central4')
  
@endsection()
