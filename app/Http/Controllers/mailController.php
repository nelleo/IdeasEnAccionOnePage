<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NuevaConsulta;
use Mail;

class mailController extends Controller
{
    public function send(Request $datos){

        $correo=["agua@iadb.org","argentina@socialab.com"];
        
        Mail::to("castrogoll.99@gmail.com")->send(new NuevaConsulta($datos));

        $mensaje="Mensaje enviado con exito";

        \Session::flash('mensaje', $mensaje);
        return redirect('/#form')->with(["mensaje",$mensaje]);
    }
}
