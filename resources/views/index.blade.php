@extends('layouts.app')

@section('content')
    <a href="playlists/">Liste des playlists</a>
    Je susi dans l'index
    <ul>
        @foreach($chansons as $c)
            <li><a href="#" class="chanson" data-file='{{$c->fichier}}'>{{$c->nom}}</a></li>
            @endforeach
    </ul>

@endsection