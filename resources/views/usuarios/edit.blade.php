@extends('layouts.app')

@section('content')
    <div class='row'>
        <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="card bg-dark">
            <div class="card-header text-info">Editar</div>
            <div class="card-container">
                <div class="card-body">

<form action="{{route('usuarios.update',$user->id)}}" method="POST">
  @csrf
  @method('put')
    <div class="mb-3">
      <label for="name" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="Ingrese su nombre">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Correo Electronico</label>
        <input type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="Ingrese su email">
      </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <button type="button" class="btn btn-danger">Cancelar</button>
  </form>
                </div>
        </div>
    </div>
    </div>

@endsection
