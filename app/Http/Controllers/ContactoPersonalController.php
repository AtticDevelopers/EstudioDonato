<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;

class ContactoPersonalController extends Controller
{

    public function postContactoPersonal(Request $request){
      /*
      $this->validate($request, ['email' => 'required|email']);

      $data = array(
        'email' => $request->email,
        'nombre' => $request->nombre,
        'apellido' => $request->apellido,
        'telefono' => $request->telefono,
        'mensaje' => $request->mensaje
      );

      Mail::send('emails.contact',$data,function($message) use ($data) {
        $message->from('atticdevelopers@gmail.com');
        $message->to('atticdevelopers@gmail.com');
        $message->subject('[estudiodonato.com]: Nuevo mensaje de '.$data['nombre'].' '.$data['apellido']);
      });

      Session::flash('success','Su mail ha sido enviado');

      return redirect('/contacto');
      */
    }

    public function getContactoPersonalView(){
      return view('contacto');
    }
}