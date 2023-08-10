<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{ url('/CSS/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/CSS/Cards.css') }}">

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="font-sans antialiased">

    <header>
        <div class="container-fluid bg-nav">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-nav py-2">
                    <div class="container-fluid">
                        <a class="navbar-brand text-pink" href="#">
                            <img src="img/213.png" alt="" height="100px" width="100px">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon bg-nav"></span>
                        </button>
                        <div class="collapse navbar-collapse  " id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item navbarlink">
                                    <a class="nav-link navbarlink nav-link-font" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item navbarlink">
                                    <a class="nav-link navbarlink nav-link-font" href="#">About Us</a>
                                </li>
                                <li class="nav-item navbarlink">
                                    <a class="nav-link navbarlink nav-link-font" href="#">Your cart</a>
                                </li>
                                <li class="nav-item navbarlink">
                                    <a class="nav-link navbarlink nav-link-font" href="#">Products</a>
                                </li>


                            </ul>
                            {{-- <form class="d-flex mt-2" role="search">
                                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                  <button class="btn btn-outline-success" type="submit">Search</button>
                                </form> --}}
                        </div>
                        <div class="btn-group ">
                            @auth
                                <button type="button" class="btn btn-outline-light">{{ Auth::user()->name }}</button>
                                <button type="button" class="btn btn-outline-light dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="button">
                                    <li><a class="navbarlink text-decoration-none dropdown-item text-center"
                                            href="{{ route('profile.update') }}">Account Settings </a></li>
                                    <li class="text-center dropdown-item">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <a class="nav-link text-danger" :href="route('logout')"
                                                onclick="event.preventDefault();
                                                                        this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            @else
                                <a href="{{ route('login_register') }}" class="btn btn-outline-light">Login</a>
                                <a href="{{ route('login_register') }}" class="btn btn-outline-light">Register</a>
                            @endauth
                        </div>
                    </div>
                </nav>
            </div>

        </div>


    </header>

    <!-- Page Heading -->


    <!-- Page Content -->

    @yield('content')


    <!-- Site footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative to help the
                        upcoming programmers with the code. Scanfcode focuses
                        on providing the most efficient code or snippets as the code wants to be simple. We will help
                        programmers
                        build up concepts in different programming languages that include C, C++, Java, HTML, CSS,
                        Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Categories</h6>
                    <ul class="footer-links">
                        <li><a class="text-decoration-none" href="">C</a></li>
                        <li><a href="">UI Design</a></li>
                        <li><a href="">PHP</a></li>
                        <li><a href="">Java</a></li>
                        <li><a href="">Android</a></li>
                        <li><a href="">Templates</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>SERVICE</h6>
                    <ul class="footer-links">
                        <li class="my-1"><a href="">About Us</a></li>
                        <li class="my-1"><a href="">Contact Us</a></li>
                        <li class="my-1"><a href="">Contact Us</a></li>
                        <li class="my-1"> <a href="">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">

                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>

</html>
