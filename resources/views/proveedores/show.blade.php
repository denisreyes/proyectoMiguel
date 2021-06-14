@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">{{$provider->name}}</h1>
    <p class="lead">{{$provider->phonenumber}}
        <br />
        {{$provider->email}}
    </p>
  </div>
</div>
@endsection
