<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Article;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mail2\TestMail;
use App\models\User;
class HomeController extends Controller
{
    public function home(){
 // dd(auth()->user());
// dd(auth()->check());

       // Mail::to('farzanehhosseini195@gmail.com')->send(new TestMail('farzaneh','1986'));

      //  $user=User::find('5');
      //  $user->articles()->get();

      $article=Article::find(5);
      $user=$article->user->id;
       
        $articles=Article::orderBy('id','desc')->get();
        return view('layout.home',compact('articles'));
    }

    public function about(){
        
     
         return view('about');
     }
     
}
