@extends('layouts.app')

@section('content')
<div class="home__background">
    <div class="main__container">

    <div class="user__infos-container">
        <img src="/uploads/avatars/{{Auth::user()->avatar}}" class="user__avatar">
        <div class="user__name-sub">
   <h1 class="user__name">{{$utilisateur->name}}</h1> <p>({{$utilisateur->ilsMeSuivent->count()}} abonnés - {{$utilisateur->jeLesSuit->count()}} abonnements)</p></div>
    @auth
        @if(Auth::id() != $utilisateur->id)
            @if(Auth::user()->jeLesSuit->contains($utilisateur->id))

                <a class="suivre user__unfollow" href="/changerSuivi/{{$utilisateur->id}}"data-pjax-toggle>Ne plus suivre</a>

                 @else

                <a class="suivre user__follow" href="/changerSuivi/{{$utilisateur->id}}"data-pjax-toggle>Suivre cet artiste</a>


            @endif
        @endif
    @endAuth


    </div>



    <div id="all">
        <div class="user__titres">
        <h2 class="user__h2">Titres</h2>

        @include("_chansons" , ["musiques"=> $utilisateur->musiques])
        </div>
        <div class="user__playlists">
       <h2 class="user__h2">Playlists</h2class>

            @include("_playlists" , ["playlists"=> $utilisateur->playlists])
        </div>
    </div>
    </div>
</div>
    @endsection