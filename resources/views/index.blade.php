@extends('layouts.app')

@section('content')
  je suis dans l'index

  <ul>
    @foreach($chansons as $c)
      <li> <a class="chanson" data-file="{{$c->fichier}}" href="#">{{$c->nom}}</a> pas l'utilisateur {{$c->utilisateur->name}} </li>
    @endforeach
  </ul>

@endsection
