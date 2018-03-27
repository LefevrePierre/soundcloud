@extends('layouts.app')

@section('content')
   <img src="/uploads/avatars/{{$user->avatar}}">
   Profile de {{$user->name}}
   <form action="/profile" method="post" enctype="multipart/form-data">
       <input type="file" name="avatar">
       {{csrf_field()}}
       <input type="submit"/>
   </form>
@endsection