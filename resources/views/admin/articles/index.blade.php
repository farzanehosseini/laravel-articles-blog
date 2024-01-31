@extends('layout.master')

@section('content')
<form action="/admin/articles/create" method="GET">
                @csrf
               
                 <button class="btn btn-warning" style="width:300px">CREATE NEW ARTICLE</button>
            </form>

<table class="table">
    <thead>
        <td>id</td>
        <td>title</td>
        <td>Oprtation</td>
        <td>Oprtation</td>
    </thead>
    <tbody>
        @foreach($articles as $article)
       <tr>
        <td>{{$article->id}}</td>
        <td>{{$article->title}}</td>
        <td>
    
            <form action="/admin/articles/{{$article->id}}/edit" method="GET">
                @csrf
               
                 <button class="btn btn-success">edit</button>
            </form>

        </td>
        <td>
    
            <form action="/admin/articles/{{$article->id}}" method="POST">
                @csrf
                 @method('delete')
                 <button class="btn btn-danger">delete</button>
            </form>

        </td>
      </tr>
        @endforeach
     </tbody>
</table>

@endsection


