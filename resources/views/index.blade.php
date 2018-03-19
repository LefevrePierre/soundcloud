@extends('layouts.app')

@section('content')
    Je susi dans l'index
    <ul>
        @foreach($chansons as $c)
            <li><a href="#" class="chanson" data-file='{{$c->fichier}}'>{{$c->nom}}</a></li>
            @endforeach
    </ul>
