@extends('layouts.app')
@section('content')
  <form class="" action="/creer" method="post" enctype="multipart/form-data" />
    <input type="text" name="nom" required placeholder="nom de la chanson" /><br>
    <input type="text" name="style" required placeholder="style du morceau" /><br>
    <input type="file" name="chanson" required /><br>
    {{csrf_field()}}
    <input type="submit" />
  </form>
@endsection
