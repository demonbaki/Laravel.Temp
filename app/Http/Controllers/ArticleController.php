<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create(){
        return view('article.create');
    }
    public function store(Request $request){
        $article = Artcile::create([
            'name' => $request->input('name');
        )];
    }
}
