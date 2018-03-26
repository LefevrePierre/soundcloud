@extends('layouts.app')
@section('content')
    @auth
        @if(Auth::id() != $utilisateur->id)
            @if(Auth::user()->jeLesSuit->contains($utilisateur->id))

                <a class="suivre" href="/changerSuivi/{{$utilisateur->id}}"data-pjax-toggle>Stopper de suivre</a>
                 @else
                <a class="suivre" href="/changerSuivi/{{$utilisateur->id}}"data-pjax-toggle>Suivre</a>


            @endif
        @endif
    @endAuth

<p>Il suit {{$utilisateur->jeLesSuit->count()}} personnes</p>
<p>Il est suivi par {{$utilisateur->ilsMeSuivent->count()}} personnes</p>

    <div id="all">
        <h2>Mes musiques</h2>

        @include("_chansons" , ["musiques"=> $utilisateur->musiques])
       <h2>Mes playlists</h2>


    </div>
    @endsection