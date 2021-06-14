@extends('layouts.app')

@section('content')
<div class='row'>
    <div class="col-sm-4"></div>
    <div class="col-sm-4 jumbotron" style="box-shadow: 5px 5px 10px gray; width: 50rem;">
        <div class="container">
            <h1 class="display-4">{{$product->name}}</h1>
            <br />
            <h3>{{$product->code}}</h3>
            <p class="lead">{{$product->description}} <b class="float-right">$ {{$product->price}}</b></p>
            <a href="{{url('product')}}" class="btn btn-secondary" role="button">Volver</a>
        </div>
    </div>
</div>
@endsection
