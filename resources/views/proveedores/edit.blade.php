@extends('layouts.app')

@section('content')
<div class='container'>
    <div class='row'>
        <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="card bg-dark">
            <div class="card-header text-info">Editar</div>
            <div class="card-container">
                <div class="card-body">
                    <form action="{{route('proveedores.update',$provider->id)}}" method="POST">
                    @csrf
                    @method('put')
                        <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="name" value="{{$provider->name}}" placeholder="Ingrese su nombre">
                        </div>
                        <div class="mb-3">
                            <label for="phonenumber" class="form-label">Telefono</label>
                            <input type="text" class="form-control" name="phonenumber" value="{{$provider->phonenumber}}" placeholder="Ingrese su numero de telefono">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electronico</label>
                            <input type="email" class="form-control" name="email" value="{{$provider->email}}" placeholder="Ingrese su email">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button type="button" class="btn btn-danger">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>

@endsection
