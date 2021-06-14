@extends('layouts.app')

@section('content')
<div class='container'>
    <div class='row'>
        <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="card bg-dark" style="box-shadow: 5px 5px 10px gray">
            <div class="card-header text-info"><h4>Editar</h4></div>
            <div class="card-body">
                <form action="{{route('product.update', $product->id)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                    <label for="provider_id" class="form-label">Proveedor Id</label>
                    <input type="text" class="form-control" name="provider_id" value="{{$product->provider_id}}" placeholder="Ingrese el id del proveedor" required>
                    </div>
                    <div class="mb-3">
                        <label for="code" class="form-label">Codigo</label>
                        <input type="number" class="form-control" name="code" value="{{$product->code}}" placeholder="Ingrese el codigo del producto" required>
                    </div>
                    <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="name" value="{{$product->name}}" placeholder="Ingresa el nombre del producto" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descripcion</label>
                        <input type="text" class="form-control" name="description" value="{{$product->description}}" placeholder="Ingrese una descripcion del producto" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Precio</label>
                        <input type="text" class="form-control" name="price" value="{{$product->price}}" placeholder="Ingrese el precio del producto" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="{{url('product')}}" class="btn btn-danger" role="button">Cancelar</a>
                </form>
            </div>
        </div>

@endsection
