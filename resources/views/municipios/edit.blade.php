@extends('templates.master')
@section('contenido_central')
<h1 align="center">Editar municipio</h1>
<br>
@endsection()
@section('contenido_central2')
{!! Form::open (['method'=>'PATCH','url'=>'/municipios/'.$municipio->id]) !!}  
			<table align="center" style="width:30%">
				<tr>
					<td colspan="2">
						{!! Form::label ('nombre','Nombre de municipio') !!}<br>
	{!! Form::text ('nombre',$municipio->nombre,['placeholder'=>'Ingresa nombre del entidad','class'=>'form-control']) !!}	
						
	</td>
</tr>
</table>
<table align="center" style="width:30%">
<tr>
	<td>				
	{!! Form::label ('id_entidad','Entidad') !!}<br>
	{!! Form::select ('id_entidad',
	$entidades->pluck('nombre','id')->all() 
	,$municipio->id_entidad,['placeholder'=>'Seleccionar ...','class'=>'form-control']) !!}
	</td>
	<td>
	{!! Form::label ('status','Estatus') !!}	<br>
	{!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),$municipio->status,
	['placeholder'=>'Selecciona status','class'=>'form-control']) !!}
	</td>
</tr>
</table>
			
<br>
<br>

<div align="center">
{!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}	
	{!! Form::close() !!}
<a align="center" class="btn btn-primary" href="{!! asset('municipios') !!}" >Regresar</a>
</div>
	


@endsection()
@section('contenido_central3')


@endsection()
@section('contenido_central4')
  
@endsection()
