<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller

{  
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function create(){
        return view('article.create');
    }
    public function store(Request $request){
        $article = Article::create(
        [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'img'=> $request->has('img') ? $request->file('img')->store('public/articles') : '/img/default.jpg',  
        ]
            
        );
         
         return redirect()->route('welcome');
    }

    public function detail(Article $article){

        // $article = Article::where('name', $name)->first();
        return view('article.detail', compact('article'));
    }

    public function update(Article $article){
        
      return view('article.update', compact('article'));
    }


    public function edit(Request $request, Article $article){
        $article ->name= $request->name;
        $article ->email= $request->email;
        $article->save();
        return redirect(route('welcome', compact('article')));

    }

    public function delete(Article $article){
       
     $article->delete();
     return redirect(route('welcome'));
    }
}
