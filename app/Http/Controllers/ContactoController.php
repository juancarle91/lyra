<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contacto;
use App\Categoria;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMail;

class ContactoController extends Controller
{

    public function contacto() {

        $categorias = Categoria::all();
        return view ('contacto.contacto', [
            'categorias' => $categorias
        ]);
    }

    /*public function newsletter (Request $request) {

        //$this->validate ($request, ['nombre'->'required', 'email'->'required', contacto'->'required', 'asunto'->'required', 'mensaje'->'required']);

        $request->validate([
            'nombre' => 'required|max:60|min:3',
            'email' => 'required|email',
        ]);
        
        $nombre = $request->input('nombre');
        $email = $request->input('email');
        $to_email = 'j.ignaciocarlee@gmail.com';
        $data = [
            'nombre'=>$nombre, 
            'email' => $email, 
        ];
    
        Mail::to($to_email)->send(new ContactoMail($data));

        return redirect('/')->with('message', 'Gracias por ser parte de Lyra!');

    } */

    public function enviar_mail (Request $request) {

        /*$this->validate ($request, ['nombre'->'required', 'email'->'required', 'contacto'->'required', 'asunto'->'required', 'mensaje'->'required']);*/

        $request->validate([
            'nombre' => 'required|max:60|min:3',
            'email' => 'required|email',
            'contacto' => 'required|max:20|min:3',
            'asunto' => 'required|max:100|min:3',
            'mensaje' => 'required|max:2000|min:3',
        ]);
        
        $nombre = $request->input('nombre');
        $email = $request->input('email');
        $contacto = $request->input('contacto');
        $asunto = $request->input('asunto');
        $mensaje = $request->input('mensaje');
        $to_email = 'administracion@lyrasalud.com';
        $data = [
            'nombre'=>$nombre, 
            'email' => $email, 
            'contacto' => $contacto, 
            'asunto' => $asunto, 
            'mensaje' => $mensaje
        ];
    
        Mail::to($to_email)->send(new ContactoMail($data));

        return redirect('/contacto')->with('message', 'Gracias por contactactarte, en breve estaremos respondiendo');

    } 
}