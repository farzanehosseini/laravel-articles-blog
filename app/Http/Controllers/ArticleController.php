<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function single(Article $article)
    {
     return view('layout.single',compact('article'));   
    }
}
