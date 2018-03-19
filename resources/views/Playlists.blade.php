@extends('layouts.app')

@section('content')

    <form action="creerPlaylist" method="POST">
        <input type="text" name="nom" placeholder="titre de la playlist">
        <textarea name="description" placeholder="description de la playlist" cols="30" rows="10"></textarea>
        <input type="submit" name="creer" value="créer">
        {{ csrf_field() }}
    </form>


    <ul>
        @foreach(Auth::user()->playlists as $p)
            <li>
                <img src="{{$p->fichier}}"  />
                <a href="">{{$p->nom}}</a>
                <form action="ajouterPlaylist" method="post" enctype="multipart/form-data">
                    <input type="submit" name="ajouter" value="ajouter à la playlist"/>
                </form>
            </li>
        @endforeach
    </ul>
@endsection