<!DOCTYPE html>
<html lang="en">
  
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blog Home - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">Articles</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{url('http://'.request()->getHttpHost().'/')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('http://'.request()->getHttpHost().'/about')}}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('http://'.request()->getHttpHost().'/register')}}">register</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{url('http://'.request()->getHttpHost().'/admin/articles')}}">admin</a></li>
                    
                    </ul>
                    @if(auth()->check())
                   
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button href="{{route('logout')}}"  class="btn btn-info">logout</button>
                        </form>
                     @else
                     <form action="{{route('login')}}" method="GET">
                        @csrf
                        <button href="{{route('login')}}"  class="btn btn-info">login</button>
                        </form>
                    @endif
                </div>
            </div>
        </nav>
        <!-- Page header with logo and tagline-->
     
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to Articles Home!</h1>
                   
                </div>
            </div>
        </header>
        <body>
        <div class="container">
            <div class="row">
            @yield('content')
        
        
               
          </div>
         </div>
        

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
