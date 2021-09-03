<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <!-- other links-->


    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title> Level The Playing Field</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
   <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />-->
    <!-- Place favicon.ico in the root directory -->

    <!-- Web Font -->
    <link href='https://fonts.googleapis.com/css?family=Archivo:regular,italic,500,500italic,600,600italic,700,700italic|Montserrat:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&#038;subset=latin,latin-ext&#038;display=swap' type='text/css' media='all' rel='stylesheet'>
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}"/>
    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.2.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

</head>
<body>
        <header class="header">
            <div class="navbar-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg">
                                <a class="navbar-brand logo" href="index.html">
                                    <img class="primary-logo" src="{{ asset('assets/images/logo/LTPF-Logo.png') }}" alt="Logo" />
                                    <img class="alt-logo" src="{{ asset('assets/images/logo/LTPF-Logo.png') }}" alt="Logo" />
                                </a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                    <ul id="nav" class="navbar-nav me-auto">
                                        <li class="nav-item">
                                            <a class="active" href="index.html">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="who-we-are.html">Who We Are</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="what-we-do.html">What We Do</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="results.html">Let Our Results Speak For Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="contractor.html">For Contractors</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="contact.html">Contact Us</a>
                                        </li>
                            @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        
                            <li class="nav-item">
                                {{-- @php $courseID= Crypt::encrypt( Auth::user()->id ); @endphp
                                <a class="nav-link" href="/user_profile/$courseID ">{{ __('Profile') }}</a> --}}
                                <a class="nav-link" href="/user_profile ">{{ __('Profile') }}</a>
                                {{-- <a class="nav-link" href="{{url('user_profile')}}">{{ __('Profile') }}</a> --}}
                            </li>
                            

                            <li class="nav-item dropdown">
                               
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item"  style="color:black;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                   
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                                    </ul>
                                    
                                </div>
                                <!-- navbar collapse -->                            
                            </nav>
                            <!-- navbar -->
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!-- navbar area -->
        </header>

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/count-up.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>


    <div class="py-4" style="background-color:white;">
        @yield('content')
    </div>


</body>
@include('layouts.footer')
</html>
