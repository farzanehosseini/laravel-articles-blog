@extends('layout.master')
<h2>edit view</h2>
@section('content')

@if($errors->any())
<div class="class alert alert-danger">
    
<ul>
    @foreach($errors->all() as $error)
    <li>
        {{$error}}
    </li>
    @endforeach
</ul>
</div>
@endif
<form action="/admin/articles/{{$article->id}}" method="POST">
    @csrf
    @method('Put')
<div class="form-group">
    <lable for="title" class="form-control" >title</lable>
    <input type="text" name="title" value="{{$article->title}}">
</div>

<div class="form-group">
    <lable for="">category:</lable>
    <select name="categories[]" id="" class="form-control" multiple>
        @foreach(\App\Models\Category::all() as $category)
        <option value="{{$category->id}}" {{in_array( $category->id , $article->categories()->pluck('id')->toArray()) ? 'selected':''}}>{{$category->name}}</option>
        @endforeach
</select>
</div>

<div class="form-group">
    <lable for="body">body</lable>
    <textarea type="text" name="body" id="body" cols="30" rows="10" class="form-control" >{{$article->body}}</textarea>
</div>
<div>
<label for="formFile" class="form-label">Image</label>
<input class="form-control" name="image" type="file">
</div>
    <button class="btn btn-info">update</button>
</form>

@endsection


