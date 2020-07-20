<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NuevaConsulta;
use Mail;

class mailController extends Controller
{
    public function send(Request $datos){
        
        $correo=["gustavolcs.271@gmail.com"];

        Mail::to($correo)->send(new NuevaConsulta($datos));
        
        $mensaje="Mensaje enviado con exito, nos comunicaremos contigo en breve";
        \Session::flash('mensaje', $mensaje);
        return redirect('/')->with(["mensaje",$mensaje]);
    }
}
