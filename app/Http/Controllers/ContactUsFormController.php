<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactUsFormController extends Controller
{
          public function ContactUsForm(Request $request) {

        // Form validation

        //  Store data in database
        

        \Mail::send('mail', array(
            'nombre' => $request->get('nombre'),
            'telefono' => $request->get('telefono'),
            'email' => $request->get('email'),
           

        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('deportesamateurs@bocajuniors.com.ar', 'Admin')->subject($request->get('subject'));
        });

        return back()->with('success', 'Recibimos su consulta, gracias por contactarse.');
    }

    public function PhoneNumber(Request $request) {

        // Form validation

        //  Store data in database
        

        \Mail::send('phone', array(
            'number' => $request->get('number'),
            

        ), function($message) use ($request){
            $message->from('deportesamateurs@bocajuniors.com.ar');
            $message->to('deportesamateurs@bocajuniors.com.ar', 'Admin')->subject($request->get('number'));
        });

        return back()->with('success', 'Recibimos su consulta, gracias por contactarse.');
    }
}
