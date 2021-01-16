@extends('templates.master')
@section('contenido_central')
<h1 align="center">Agregar nuevo usuario</h1>
@endsection()
@section('contenido_central2')

{!! Form::open (['method'=>'PATCH','url'=>'/users/'.$users->id]) !!} 


  <table align="center" width="70%">
    <tr>
        <td>
            <h5>Apellido Paterno</h5>
    {!! $users->ape_paterno!!}
        </td>
        <td>
           <h5>Apellido Materno</h5><br>
    {!! $users->ape_materno !!}
        </td>
        <td>
            <h5>Nombre</h5>
    {!! $users->nombre !!}
        </td>
    </tr>
    <tr>
        <td>
            <h5>Edad</h5>
    {!! $users->edad !!}
        </td>
        <td>
           <h5>Genero</h5>
    {!! $users->genero!!}  
        </td>
    </tr>
  </table>

<hr>


 <h2 align="center">Datos de Domicilio</h2>
  <table align="center"  width="70%">
    <tr>
        <td>
            <h5>Dirección actual</h5>
    {!! $users->direccion!!}
        </td>
        <td>
            <h5>Colonia</h5>
    {!! $users->colonia !!}
        </td>
        <td>
            <h5>Código Postal</h5>
          {!! $users->cp !!}
        </td>
    </tr>
    <tr>
        <td>
        <h5>Entidad</h5>
    {!! $users->entidades->nombre!!}
        </td>
        <td colspan="2">
    <h5>Municipio</h5>
        {!! $users->municipios->nombre !!}    
        </td>
    </tr>
  </table>

  <hr>
<br>
<h3 align="center">Datos de Usuario</h3>
<table align="center" width="70%">
    <tr>
    <td>
    <h5>Correo</h5>
    {!! $users->correo !!}
    </td>
    <td>
<h5>    Alias de usuario</h5>
    {!! $users->username !!}</td>
    </tr>
    <tr>
   

    <td><h5>Estatus</h5><br>
      <?php if ($users->status==1): ?>
        Activo
      <?php else: ?>
        Eliminado
      <?php endif ?>
      </td>
   
        <td colspan="2">
      <br>
      <h5>Tipo usuario</h5>
    {!! $users->tipos_usuario->nombre !!}
   
        </td>
    </tr>
</table>


@endsection()
@section('contenido_central3')
<br>

<div align="center">
        
 
<a class="btn "  href="{!! asset('users') !!}">Regresar</a>
        </div>


@endsection()
@section('contenido_central4')
  

 
@endsection()
