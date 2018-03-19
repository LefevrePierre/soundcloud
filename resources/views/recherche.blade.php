@extends('layouts.app')
@section('content')
    <h3>Les utilisateurs</h3>
<ul>
    @foreach($utilisateurs as $u)
        <li>
        <a href="/utilisateur/{{$u->id}}" data-pjax>{{$u->name}}</a>
        </li>
        @endforeach

    </ul>
    <h3>Les chansons</h3>
    @foreach($chansons as $m)
        <li>
            <a href="/chansons/{{$m->id}}">{{$m->nom}}</a>
        </li>
        @endforeach

        </ul>
    @endsection