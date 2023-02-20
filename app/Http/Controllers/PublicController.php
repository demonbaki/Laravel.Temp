<?php

namespace App\Http\Controllers;


use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class PublicController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function Form(){
        return view('form');
    }
    public function iscriviti(Request $request){
        $name = $request->name;
        $email = $request->email;

        $user = compact('name','email');
        Mail::to($email)->send(new ContactMail($user));

       
        return redirect(route('welcome'))->with('message', 'la tua email è stata inviata con successo');
    }

}

