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
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/utilisateur.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,700" rel="stylesheet">

</head>
<body>
<div id="app">
    <nav class="">
        <div class="container">
            <div class="">

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
                <ul class="nav navbar-nav navbar-right test">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}" data-pjax>Login</a></li>
                        <li><a href="{{ route('register') }}"data-pjax>Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu dropdown-content">
                                <li>
                                    <a href="{{ route('profile') }}">Profile</a>

                                </li>
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
            <div><a href="/" data-pjax>
                    <img src="/img/logo.png" class="leftbar__logo" alt="logo"></a></div>

    <form id="search" class="leftbar__searchform">
        <input type="search" class="leftbar__search-input btn-search"name="search" data-pjax required placeholder="Rechercher" >
        <button type="submit" class="leftbar__loupe"><img src="/img/icon-loupe.png" class="leftbar__loupe"></button>
    </form>
<div class="leftbar__user">
    @auth
    <img src="/uploads/avatars/{{Auth::user()->avatar}}" class="leftbar__avatar"alt="Avatar"/> <a href="/utilisateur/{{Auth::user()->id}}">Ma musique</a><br/>
        @endauth
</div>

    <p class="leftbar__paragraph">Uploadez vos titres préférés<br/> dès maintenant, partagez<br/> vos goûts à la communauté</p>

    @auth
        <span  data-pjax class="leftbar__input-form btn-formulairechanson btn-upload">Uploadez!</span><br>
    @endauth

    <ul class="leftbar__ul">
       <li class="leftbar__li"> <img src="/img/coeur.png" class="leftbar__icons"><a href="#">Coups de coeurs</a></li>
        <li class="leftbar__li btn-playlists"> <img src="/img/playlist.png" class="leftbar__icons"><span>Mes playlists</span></li>
        <li class="leftbar__li"><img src="/img/disque.png" class="leftbar__icons"><a href="#">Albums</a></li>

    </ul>
            <audio id="audio" controls src="/js/musique1.mp3"></audio>
        </div>

    </div>

    <div class="menu__search">
        <div class="menu__main-content">
            <h2 class="menu__search-title">Les derniers artistes inscrits</h2>
@auth
            <ul>
                @foreach($utilisateurs as $u)
                    <li class="menu__search-userContainer">
                        <img src="/uploads/avatars/{{$u->avatar}}" class="menu__search-avatar" alt="avatar">
                        <div>
                        <a href="/utilisateur/{{$u->id}}" class="menu__search-userName" data-pjax>{{$u->name}}</a>
                        <p class="menu__search-follow">Suivi par {{$u->ilsMeSuivent->count()}} personnes</p>
                        </div>
                    </li>
                @endforeach
            </ul>
    @endauth

        </div>
    </div>



    <div class="menu__upload">
        <div class="menu__main-content">
            <h2 class="menu__search-title">Uploader ma musique</h2>
            <form action="/creerchanson" data-pjax method="post" enctype="multipart/form-data">
            <input type="text" name="nom" placeholder="Titre" value="{{old('nom')}}"/><br>
            <input type="text" name="style" placeholder="Genre"value="{{old('style')}}"/><br>
           <LABEL CLASS="file__container">
               + img
            <input type="file" name="img"/><br></LABEL>
            <label class="file__container2">
+ titre
            <input type="file" name="chanson"/>
            </label>
            {{ csrf_field() }}
            <input type="submit" value="uploader"/>
            </form>
        </div>
    </div>




    <div class="menu__playlists">
     {{--   <div class="menu__main-content">
        <h2 class="menu__search-title">Mes playlists</h2>
        <ul>
            @foreach(Auth::user()->playlists as $p)

                <li>
                    <img src="{{$p->fichier}}"  />
                    <a href="">{{$p->nom}}</a>
                </li>

            @endforeach
        </ul>
        </div>--}}
    </div>





    <main class="py-4" id="pjax-container">

    @yield('content')


</main>




<!-- Scripts -->

<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/jquery.pjax.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>
<script src="{{ asset('js/lecteur.js') }}"></script>
<script src="{{ asset('js/menu.js') }}"></script>
<script src="{{ asset('js/divers.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
