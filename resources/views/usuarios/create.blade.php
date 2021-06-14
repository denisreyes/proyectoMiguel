@extends('layouts.app')

@section('content')
<div class='container'>
    <div class='row'>
        <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="card bg-dark" style="box-shadow: 5px 5px 10px gray">
            <div class="card-header text-info"><h4>Agregar</h4></div>
            <div class="card-body">
<form action="{{route('usuarios.store')}}" method="POST">
  @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Correo Electronico</label>
        <input type="email" class="form-control" name="email" placeholder="Ingrese su email" required>
      </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Ingresa tu password" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{url('usuarios')}}" class="btn btn-danger" role="button">Cancelar</a>
  </form>
            </div>
        </div>

@endsection
