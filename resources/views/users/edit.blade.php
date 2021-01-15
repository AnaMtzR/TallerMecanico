@extends('templates.master')
@section('contenido_central')
<h1 align="center">Agregar nuevo usuario</h1>
@endsection()
@section('contenido_central2')

{!! Form::open (['method'=>'PATCH','url'=>'/users/'.$users->id]) !!} 


  <table align="center" width="70%">
    <tr>
        <td>
            {!! Form::label ('ape_paterno','Apellido Paterno') !!}<br>
    {!! Form::text ('ape_paterno',$users->ape_paterno,['placeholder'=>'Ingresa apellido paterno','class'=>'form-control','required']) !!}
        </td>
        <td>
            {!! Form::label ('ape_materno','Apellido Materno') !!}<br>
    {!! Form::text ('ape_materno',$users->ape_materno,['placeholder'=>'Ingresa apellido materno','class'=>'form-control','required']) !!}
        </td>
        <td>
            {!! Form::label ('nombre','Nombre') !!}<br>
    {!! Form::text ('nombre',$users->nombre,['placeholder'=>'Ingresa tu(s) nombre(s)','class'=>'form-control','required']) !!}
        </td>
    </tr>
    <tr>
        <td>
            
    {!! Form::label ('edad','Edad') !!}<br>
    {!! Form::number ('edad',$users->edad,['placeholder'=>'Ingresa tu edad','class'=>'form-control','required']) !!}
        </td>
        <td>
            {!! Form::label ('genero','Genero') !!}<br>
    {!! Form::select ('genero',array('M'=>'Masculino','F'=>'Femenino'),$users->genero,['placeholder'=>'Selecciona genero','class'=>'form-control','required']) !!}  
        </td>
    </tr>
  </table>

<hr>


 <h2 align="center">Datos de Domicilio</h2>
  <table align="center"  width="70%">
    <tr>
        <td>
            {!! Form::label ('direccion','Dirección actual') !!}<br>
    {!! Form::text ('direccion',$users->direccion,['placeholder'=>'Ingresa tu dirección','class'=>'form-control','required']) !!}
        </td>
        <td>
            {!! Form::label ('colonia','Colonia') !!}<br>
    {!! Form::text ('colonia',$users->colonia,['placeholder'=>'Ingresa Nombre de tu colonia','class'=>'form-control','required']) !!}
        </td>
        <td>
            {!! Form::label ('cp','Código Postal') !!}<br>
    {!! Form::number ('cp',$users->cp,['placeholder'=>'Ingresa tu cp ','class'=>'form-control','required']) !!}
        </td>
    </tr>
    <tr>
        <td>
        {!! Form::label ('id_entidad','Entidad') !!}<br>    
    {!! Form::select ('id_entidad',
    $entidades->pluck('nombre','id')->all(),$users->id_entidad,['placeholder'=>'Seleccionar ...','class'=>'form-control','required']) !!}
        </td>
        <td colspan="2">
    {!! Form::label ('id_municipio','Municipio') !!}<br>
        {!! Form::select ('id_municipio',
    $municipios->pluck('nombre','id')->all(),$users->id_municipio,['placeholder'=>'Seleccionar ...','class'=>'form-control','required']) !!}    
        </td>
    </tr>
  </table>

  <hr>
<br>
<h3 align="center">Datos de Usuario</h3>
<table align="center" width="70%">
    <tr>
    <td>
    {!! Form::label ('correo','Correo') !!}<br>
    {!! Form::text ('correo',$users->correo,['placeholder'=>'Ingresa  tu correo electronico','class'=>'form-control','required']) !!}
    </td>
    <td>
    {!! Form::label ('username','Alias de usuario') !!}<br>
    {!! Form::text ('username',$users->username,['placeholder'=>'Ingresa  tu alias','class'=>'form-control','required']) !!}</td>
    </tr>
    <tr>
   

    <td>{!! Form::label ('status','Estatus') !!}    <br>
    {!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),$users->status,['placeholder'=>'Selecciona estatus','class' => 'form-control','required']) !!}</td>
    </tr>
    <tr>
        <td colspan="2">
    {!! Form::label ('id_tipo_usuario','Tipo usuario') !!}  <br>
    {!! Form::select ('id_tipo_usuario',
    $tipo_usuario->pluck('nombre','id')->all(),$users->id_tipo_usuario,['placeholder'=>'Seleccionar ...','class'=>'form-control','required']) !!}
        </td>
    </tr>
</table>


@endsection()
@section('contenido_central3')
<br>

<div align="center">
        
{!! Form::submit('Agregar', ['class'=>'btn ']) !!}  
{!! Form::close() !!}   
<a class="btn "  href="{!! asset('users') !!}">Regresar</a>
        </div>


@endsection()
@section('contenido_central4')
  

 
@endsection()
