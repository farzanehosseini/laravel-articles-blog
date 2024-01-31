<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Models\User;
use Illuminate\Support\Facades\Validator;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     $articles=DB::table('articles')->get();
//     dd($articles);
//     return view('welcome');
// });

// Route::get('/', function () {
//     $articles=DB::table('articles')->find(1);
//     dd($articles->title);
//     return view('welcome');
// });

// Route::get('/', function () {
//     $articles=DB::table('articles')->insert([
//         'id'=>3,
//         'title'=>'article 3',
//         'slug'=>'article-3',
//         'body'=>'this is article 3'
//     ]);
//     dd($articles);
//     return view('welcome');
// });
// Route::get('/', function () {
//     $articles=DB::table('articles')->where('slug','article-3')->update([
//         'body'=>'this is new2 article 3'
//     ]);
//     dd($articles);
//     return view('welcome');
// });
// Route::get('/', function () {
//     $articles=DB::table('articles')->orderBy('id','desc')->get();
//     dd($articles);
//     return view('welcome');
// });
// Route::get('/', function () {
//    // $articles=Article::all();
//    $articles=Article::orderBy('id','desc')->get();
//     dd($articles);
//     return view('welcome');
// });

//Route::get('/', function () {
//    for($i=1;$i<10;$i++)
//     $article = Article::factory()->create();
// for($i=1;$i<10;$i++)
//    $users[$i] = User::factory()->create();
    
//     for($i=1;$i<10;$i++)
//     $article[$i] = Article::factory()->create();   
 //});

  Route::prefix('admin')->middleware('auth')->group(function(){
//     Route::get('articles/create','App\Http\Controllers\Admin\ArticleController@create');

//     Route::get('/articles','App\Http\Controllers\Admin\ArticleController@index');

//     Route::POST('articles/create','App\Http\Controllers\Admin\ArticleController@store');

//     //Route::get('articles/{id}/edit','App\Http\Controllers\Admin\ArticleController@edit');وقتی ورودی تابع یه جای $article برابر با $id باشد.
//     Route::get('articles/{article}/edit','App\Http\Controllers\Admin\ArticleController@edit');

//     //Route::Put('articles/{id}/edit','App\Http\Controllers\Admin\ArticleController@update');
//     Route::Put('articles/{article}/edit','App\Http\Controllers\Admin\ArticleController@update');

//     //Route::delete('articles/{id}','App\Http\Controllers\Admin\ArticleController@destroy');
//     Route::delete('articles/{article}','App\Http\Controllers\Admin\ArticleController@destroy');
Route::resource('articles','App\Http\Controllers\Admin\ArticleController')->except(['show']);

});
Route::get('/','App\Http\Controllers\HomeController@home');
Route::get('/about','App\Http\Controllers\HomeController@about')->middleware('auth');
Route::get('/articles/{articleSlug}','App\Http\Controllers\ArticleController@single')->middleware('auth');


Auth::routes();


