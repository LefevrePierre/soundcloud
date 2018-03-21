<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/registration.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">

</head>
<body>
<main id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}" data-pjax>Login</a></li>
                        <li><a href="{{ route('register') }}"data-pjax>Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="leftbar__container" >
        <div class="leftbar__content">
        <div><img src="/img/logo.png" class="leftbar__logo" alt="logo"></div>

    <form id="search" class="leftbar__searchform" >
        <input type="search" class="leftbar__search-input"name="search" required placeholder="Rechercher" >
        <button type="submit" class="leftbar__loupe"><img src="/img/icon-loupe.png" class="leftbar__loupe"></button>
    </form>
<div class="leftbar__user">
    <img src="#" alt=""/> <a href="utilisateur">Ma musique</a><br/>
</div>

    <p class="leftbar__paragraph">Uploadez vos titres préférés<br/> dès maintenant, partagez<br/> vos goûts à la communauté</p>

    @auth
        <a href="/formulairechanson" data-pjax class="leftbar__input-form">Uploadez!</a><br>
    @endauth
    <ul class="leftbar__ul">
       <li class="leftbar__li"> <img src="/img/coeur.png" class="leftbar__icons"><a href="#">Coups de coeurs</a></li>
       <li class="leftbar__li"> <img src="/img/playlist.png" class="leftbar__icons"><a href="/playlists">Mes playlists</a></li>
        <li class="leftbar__li"><img src="/img/disque.png" class="leftbar__icons"><a href="#">Albums</a></li>

    </ul>
            <audio id="audio" controls src="/js/musique1.mp3"></audio>
        </div>

    </div>
</main>


    <main class="py-4" id="pjax-container">
        <div class="container__c">
    @yield('content')
        </div>
</main>




<!-- Scripts -->

<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/jquery.pjax.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>
<script src="{{ asset('js/lecteur.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
