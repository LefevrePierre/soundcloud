@extends('layouts.app')

@section('content')

    <div class="home__background-image">
        <div class="home__container">
        <h1 class="home__background-h1">Découvrez les nouveaux titres</h1>
        </div>

    </div>
    <div class="home__background">

    <div class="home__container">
        <h2>Nouveautés</h2>


            <ul class="home__nouveautes">
                @foreach($chansons as $c)

                    <li>
                        <div class="home__nouveautes-img" style="background-image: url({{$c->img}})"><div class="home__nouveautes-hover">
                                <img src="../img/movie-player-play-button.svg" alt=""></div></div>
                        <a href="#" class="chanson home__chanson-title" data-file="{{$c->fichier}}" >{{$c->nom}}</a>
                    </li>

                @endforeach
            </ul>
        <div class="home__infos">
            <div class="home__infos-txt">
            <h2>Avec vous partout et non-stop</h2>
            <p>Tout devient si simple avec notre dernière version mobile. Grâce à elle vos titres coups de coeurs ainsi que vos playlists du moment sont accessibles ou que vous soyez. </p>
            <input type="button" class="home__infos-btn" value="Télécharger">
            </div>
            <img src="../img/phones.png" alt="phones">
        </div>
    </div>


</div>



@endsection