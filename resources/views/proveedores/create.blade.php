@extends('layouts.app')

@section('content')
<div class='container'>
    <div class='row'>
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="card bg-dark" style="box-shadow: 5px 5px 10px gray">
                <div class="card-header text-info"><h4>Agregar</h4></div>
                <div class="card-body">
                    <form action="{{route('proveedores.store')}}" method="POST">
                    @csrf
                        <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre">
                        </div>
                        <div class="mb-3">
                            <label for="phonenumber" class="form-label">Telefono</label>
                            <input type="text" class="form-control" name="phonenumber" placeholder="Ingrese su numero de telefono" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electronico</label>
                            <input type="email" class="form-control" name="email" placeholder="Ingrese su email">
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="{{url('proveedores')}}" class="btn btn-danger" role="button">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>


@endsection
