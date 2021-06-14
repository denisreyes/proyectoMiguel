@extends('layouts.app')

@section('content')
<div class='card'>
    <div class='row'>
    <div class="col-sm-4">
<form action="{{route('sales.store')}}" method="POST">
  @csrf
    <div class="mb-3">
        <label for="code" class="form-label">Code</label>
        <input type="code" class="form-control" name="name" placeholder="Ingrese el codigo " required>
    </div>
    <div class="mb-3">
      <label for="date" class="form-label">Date</label>
      <input type="datetime" class="form-control" name="name" placeholder="Fecha " required>
    </div>
    <div class="mb-3">
        <label for="id" class="form-label">client id</label>
        <input type="id" class="form-control" name="client_id" placeholder=id del cliente" required>
      </div>
    <div class="mb-3">
      <label for="id" class="form-label">product id </label>
      <input type="id" class="form-control" name="product_id " placeholder="Ingresa el id del producto" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{url('sales')}}" class="btn btn-danger" role="button">Cancelar</a>
  </form>

@endsection
