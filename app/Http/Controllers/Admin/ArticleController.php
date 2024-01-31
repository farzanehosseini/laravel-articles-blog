<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.articles.index',[
            'articles'=>Article::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        //dd(request()->all());
        //dd('test');
        // $article=new Article();
        // $article->title=request('title');
        // $article->slug=request('title');
        // $article->body=request('body');
        // $article->save();

//-------------------------------------------------------------------------
//(((((((
    // $validator=Validator::make(request()->all(),
        // [
        //   'title'=>'required|min:10|max:50',
        //   'body'=>'required'

        // ]);
        // if($validator->fails())
        // {
        //     return redirect()
        //             ->back()
        //             ->withErrors( $validator);
        // }
// return redirect('/admin/articles/create');
//)))))))
    
//یا 

//(((((((
// Validator::make(request()->all(),
        // [
        //   'title'=>'required|min:10|max:50',
        //   'body'=>'required'

        // ])->validate();
//)))))))
        



    

//         Article::create(

//             [
//                 'title'=>request('title'),
//                 'slug'=>request('title'),
//                 'body'=>request('body'),
                
//             ]
//             );

//--------------------------------------------------------------------------------------



//         $validate_data=Validator::make(request()->all(),
//       [
//   'title'=>'required|min:10|max:50',
//   'body'=>'required'

//     ],['title.required'=>'عنوان مقاله را وارد کنید'])->validated();
//یا
// $validate_data=$this->validate(request(),
// [
//        'title'=>'required|min:10|max:50',
//        'body'=>'required'
// ]);
//یا

// $validate_data=$request->validate(
// [
//        'title'=>'required|min:10|max:50',
//        'body'=>'required'
// ]);
//یا

$validate_data=$request->validated();
// Article::create(

//     [
//         'title'=>$validate_data['title'],
//        // 'slug'=>$validate_data['title'],
//         'body'=>$validate_data['body']
//     ]
//     );

  $article=auth()->user()->articles()->create([
    'title'=>$validate_data['title'],
    'body'=>$validate_data['body'],
    'image'=>$validate_data['image']
  ]);

  $article->categories()->attach($validate_data['categories']);
    return redirect('/admin/articles/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        // $article=Article::findOrFail($id);وقتی ورودی تابع یه جای $article برابر با $id باشد.
       
    return view('admin.articles.edit',[
        'article'=>$article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request,Article $article)
    {
        // $validate_data=Validator::make(request()->all(),
    // [
    //   'title'=>'required|min:10|max:50',
    //   'body'=>'required'
    
    // ])->validated();

    //یا
    // $validate_data=$this->validate(request(),
    // [
    //     'title'=>'required|min:10|max:50',
    //  'body'=>'required'
    // ]
    //یا

    $validate_data=$request->validated();
    
    //$article=Article::findOrFail($id);وقتی ورودی تابع یه جای $article برابر با $id باشد.
  
    // $article->update([
    //     'title'=>$validate_data['title'],
    //     'slug'=>$validate_data['title'],
    //     'body'=>$validate_data['body']
    // ]);
    $article->update($validate_data);
    $article->categories()->sync($validate_data['categories']);
    return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        
    //$article=Article::findOrFail($id);
    //وقتی ورودی تابع یه جای $article برابر با $id باشد.
  
    $article->delete();
    return back(); 
    }
}
