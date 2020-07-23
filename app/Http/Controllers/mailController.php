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

        if(session()->get('locale')=="es"){
            $mensaje="Mensaje enviado con exito";
        }else{
            $mensajeEn="Message sent succesfully";
        }
        $mensaje="Mensaje enviado con exito";
        \Session::flash('mensaje', $mensaje);
        return redirect('/')->with(["mensaje",$mensaje]);
    }
}
