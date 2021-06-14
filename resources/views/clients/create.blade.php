@extends('layouts.app')

@section('content')
<div class='container'>
    <div class='row'>
    <div class="col-sm-4">
<form action="{{route('client.store')}}" method="POST">
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
      <label for="telephone" class="form-label">Phonenumber</label>
      <input type="telephone" class="form-control" name="password" placeholder="Ingresa Numero de telefono" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{url('clients')}}" class="btn btn-danger" role="button">Cancelar</a>
  </form>

@endsection
