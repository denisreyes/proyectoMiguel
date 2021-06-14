@extends('layouts.app')

@section('content')

<div class="jumbotron" style="box-shadow: 5px 5px 10px gray">
  <div class="container">
    <h1 class="display-4">{{$user->name}}</h1>
    <p class="lead">{{$user->email}}</p>
    <a href="{{url('usuarios')}}" class="btn btn-secondary" role="button">Volver</a>
  </div>
</div>
@endsection
