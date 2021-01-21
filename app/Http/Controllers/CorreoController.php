<?php

namespace App\Http\Controllers;

use App\Cotizaciones;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
use App\Order;
use App\Mail\OrderShipped;
use App\Mail\Message;
use App\Mail\Welcome;
use Illuminate\Support\Facades\Mail;

class CorreoController extends Controller
{
    public function create($id)
    {
        $cotizaciones = Cotizaciones::find($id);
        return view('correos.form_mail')
            ->with('cotizaciones', $cotizaciones);
    }

    public function enviar(Request $request)
    {
        $pathToFile = "";
        $containFile = false;

        echo "<script>console.log('Hola, cara de bola' );</script>";

        $destinatario = $request->input("destinatario");
        $asunto = $request->input("asunto");
        $contenido = $request->input("contenido_mail");

        echo "<script>console.log('Destinatario: . $destinatario .' );</script>";
        echo "<script>console.log('Asunto: . $asunto .' );</script>";
        echo "<script>console.log('Contenido: . $contenido .' );</script>";

        $data = array('contenido' => $contenido);
        $r = Mail::send('correos.plantilla_correo', $data, function ($message) use ($asunto, $destinatario, $containFile, $pathToFile) {
            $message->from('jsarabiar@toluca.tecnm.mx', 'Taller Mecánico Lermaiami');
            $message->to($destinatario)->subject($asunto);
        });

        if ($r) {
            return view('mensajes.plantillamensaje')
                ->with('var', '1')
                ->with('ruta_boton', 'correos.form_mail')
                ->with('mensaje_boton', 'Nuevo')
                ->with('msj', 'Correo enviado con éxito. ');
        } else {
            return view('mensajes.plantillamensaje')
                ->with('var', '2')
                ->with('ruta_boton', 'home')
                ->with('mensaje_boton', 'Ir al Home')
                ->with('msj', 'Error al enviar el correo');
        }
    }
}
