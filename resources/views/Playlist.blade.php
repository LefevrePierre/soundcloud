@extends('layouts.app')

@section('content')
@include('_chansons', ['musiques'=>$playlist->chansons])
    @endsection