<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="">
    
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/CSS/main.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ url('/CSS/Auth.css') }}"> --}}
</head>
<body>
    <header>
    
        <nav class="navbar navbar-expand-lg bg-light py-4">
            <div class="container-fluid">
              <a class="navbar-brand text-pink" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-nav"></span>
              </button>
              <div class="collapse navbar-collapse  " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item navbarlink">
                    <a class="nav-link navbarlink" href="#">Home</a>
                  </li>
                  <li class="nav-item navbarlink">
                    <a class="nav-link navbarlink" href="#">About Us</a>
                  </li>
                  <li class="nav-item navbarlink">
                    <a class="nav-link navbarlink" href="#">Your cart</a>
                  </li>
                  <li class="nav-item navbarlink">
                    <a class="nav-link navbarlink" href="#">Products</a>
                  </li>
                  <li class="nav-item dropdown navbarlink">
                    <a class="nav-link navbarlink dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     About 
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item navbarlink" href="#">Action</a></li>
                      <li><a class="dropdown-item navbarlink" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider navbarlink"></li>
                      <li><a class="dropdown-item navbarlink" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  
                </ul>
                {{-- <form class="d-flex mt-2" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form> --}}
              </div>
            </div>
          </nav>
        
    </header>
    {{-- -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- --}}
    @yield('content')
    <footer>
        
    </footer>





</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</html>