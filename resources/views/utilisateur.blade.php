@extends('layouts.app')
@section('content')
{{$utilisateur->name}}
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
        <ul>
    @foreach($utilisateur->musiques as $m)
<img src="{{$m->img}}" alt="{{$m->nom}}"/>

            <li>
        <a href="#" class="chanson" data-file="{{$m->fichier}}" >{{$m->nom}}</a>
                <a href="/supprimerChanson/{{$m->id}}">x</a>

            </li>

                <ul>
                    @foreach(Auth::user()->playlists as $p)
                        <li>
                            <img src="{{$p->fichier}}"/>
                            <span>{{$p->nom}}</span>
                            <form action="/playlistAjout/{{$p->id}}/{{$m->id}}" method="post" enctype="multipart/form-data">
                                <input type="submit" name="ajouter" value="ajouter à la playlist"/>
                                {{csrf_field()}}
                            </form>
                            <a href="/supprimerPlaylist/{{$p->id}}">x</a>
                        </li>
                    @endforeach
                </ul>
        @endforeach

        </ul>
        <h2>Mes playlists</h2>


    </div>
    @endsection