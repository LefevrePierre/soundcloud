@extends('layouts.app')

@section('content')

@include('_errors')

<audio id="audio" controls src="/js/musique1.mp3"></audio>
<form id="search">
    <input type="search" name="search" required placeholder="Recherchez des artistes ou encore des titres">
    <input type="submit"/>

</form>

@auth
    <a href="/formulairechanson" data-pjax>Uploadez la votre</a>
@endauth

<div id="aremplir">

</div>




    <form action="/creerchanson" data-pjax method="post" enctype="multipart/form-data">
    <input type="text" name="nom" placeholder="Nom de la musique" value="{{old('nom')}}"/><br>
    <input type="text" name="style" placeholder="style de la musique"value="{{old('style')}}"/><br>
    <input type="file" name="img"/><br>
    <input type="file" name="chanson"/>

    {{ csrf_field() }}
        <input type="submit"/>

</form>
    @endsection