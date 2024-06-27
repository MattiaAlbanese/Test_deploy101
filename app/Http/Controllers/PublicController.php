<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage() {
        return view('welcome');
    }

    public function contacts(){
        return view('contacts');
    }

    public function contactSubmit(Request $request){ //! dependency injection
        $name = $request->input('name');
        $email = $request->email;
        $info = $request->info;

        try{
            Mail::to($email)->send(new ContactMail($name, $email, $info)); //! object composition
        } catch(Exception $error){
            return redirect()->back()->with('error', 'Richiesta fallita. Ci scusiamo per il disagio. Riprova più tardi');
        }
        return redirect(route('homepage'))->with('emailSent', 'Abbiamo ricevuto la tua mail. Ti contatteremo il prima possibile.');
    }
}
