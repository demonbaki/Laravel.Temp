<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ArticleController;



class PublicController extends Controller
{
    public function welcome(){
        $articles = Article::all()->sortDesc();
        return view('welcome', compact('articles'));

        
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

