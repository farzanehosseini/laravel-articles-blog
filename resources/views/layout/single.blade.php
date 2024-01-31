@extends('layout.master')

   @section('content')
   <!-- Page content-->
   <div class="container">
            <div class="row">
                <!-- Blog entries-->
              <center>  <h1>{{$article->title}}</h1></center>
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="{{asset('assets/'.$article->image)}}"  alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">January 1, 2023</div>
                            <h2 class="card-title">{{$article->title}}</h2>
                            <p class="card-text">{{$article->body}}</p>
                            
                        </div>
                    </div>
                    
                   
                </div>
           
               <ul>
                @foreach($article->categories()->get() as $category)
                  <li>
                    {{$category->name}}
                  </li>
                @endforeach
</ul>
            </div>
        </div>
   @endsection