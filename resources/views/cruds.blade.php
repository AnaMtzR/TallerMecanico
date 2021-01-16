
@extends('templates.master')
@section('contenido_central')

        <h1 align="center"> Menú de datos</h1>
@endsection()
@section('contenido_central2')

<table align="center" style="max-width:100%">
    <tr>
        <td>
            <h1 align="center"> Lugares</h1>
            <table align="center" style="max-width:100%">
                <tr >
                 
        <td  align="center" width="100px" height="120px" rowspan="2">
            <a href="entidades" ><i class="fa fa-map fa-5x" aria-hidden="true"></i>
                <br>Entidades</a>      
        </td>
    
                <td align="center"  width="100px" height="120px">
            <a href="municipios" ><i class="fa fa-street-view fa-5x" aria-hidden="true"></i><br>Municipios </a>
            
        </td>

            </tr>
            </table>
        </td>
        <td>
            <h1 align="center">Taller</h1>
            <table align="center" style="max-width:100%">
                <tr>
                 
        <td  align="center" width="100px">
            <a href="fotos_servicio" ><i class="fa fa-picture-o fa-5x" aria-hidden="true"></i>
             <br>Fotos</a>
        </td>
        <td align="center" width="100px" height="120px">
        
            <a href="cotizaciones" ><i class="fa fa-calculator fa-5x" aria-hidden="true"></i><br>cotizaciones</a>
        </td>
               
                    
        <td align="center" width="100px" height="120px">
            <a href="reservas_servicio" ><i class="fa fa-calendar fa-5x" aria-hidden="true"></i><br>Reservas Servicio</a>
        </td>
                </tr>
            </table>
        </td>
       
    </tr>
   

</table>



@endsection()
@section('contenido_central3')


<table align="center" style="max-width:100%">
    <tr>

    	<td>
    		<td>
            <h1 align="center">Usuarios</h1>
        <table align="center" style="max-width:100%">
            <tr>
                 <td align="center" width="100px" height="120px">
            <a href="users" ><i class="fa fa-users fa-5x" aria-hidden="true"></i><br>Usuarios<br></a>
        </td>
         <td align="center"  width="100px" height="120px">
            <a href="tarjetas_cliente" ><i class="fa fa-id-card fa-5x" aria-hidden="true"></i> <br>Tarjetas </a>
        </td>
    
            
        <td align="center" width="120px" height="120px">
            <a href="comentarios" ><i class="fa fa-comments-o fa-5x" aria-hidden="true"></i><br>Comentarios Servicios</a>
        </td>
            </tr>
        </table>
        </td>

    	<td>
        <h1 align="center">Catalogos</h1>
        <table align="center" style="max-width:100%">
            <tr>
                <td align="center" width="100px">
            <a href="tipos_servicios" ><i class="fa fa-briefcase fa-5x" aria-hidden="true"></i><br>Tipos de servicios </a>
        </td>
        <td align="center" width="100px">
            <a href="tipos_usuario" ><i class="fa fa-user-circle-o fa-5x" aria-hidden="true"></i><br>Tipos de usuarios </a>
        </td>
        <td align="center" width="100px">
            <a href="tipos_banco" ><i class="fa fa-bank fa-5x" aria-hidden="true"></i> <br>Tipos de banco </a>
        </td>
        <td align="center" width="100px">
            <a href="tipos_consorcio" ><i class="fa fa-building fa-5x" aria-hidden="true"></i><br>Tipos de Consocio </a>
        </td>
       
            </tr>
        </table>
    </td>
    </tr>
</table>
@endsection()
@section('contenido_central4')
  
@endsection()





