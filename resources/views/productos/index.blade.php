@extends('layouts.app')

@section('content')
<div class="container card text-white bg-light" style="box-shadow: 5px 5px 10px gray">
    <br />
 <h2>Lista de Productos <a href="product/create"> <button type="button" class="btn btn-success float-right"><img src="{{asset('dist/img/add.png')}}">Agregar usuario</button></a> </h2>

<h6>
    @if($search)
    <div class="alert alert-info" role="alert">
    El resultado para '{{$search}}' es:
    </div>
    @endif

  </h6>



<table class="table table-hover" >
    <thead>
  <tr>
    <th scope="col">id</th>
    <th scope="col">Proveedor Id</th>
    <th scope="col">Codigo</th>
    <th scope="col">Nombre</th>
    <th scope="col">Descripcion</th>
    <th scope="col">Precio</th>
    <th scope="col">Acciones</th>
     </tr>
</thead>
<tbody>
@foreach ($products as $product)
  <tr>
    <th scope="row">{{$product->id}}</th>
    <td>{{$product->provider_id}}</td>
    <td>{{$product->code}}</td>
    <td>{{$product->name}}</td>
    <td>{{$product->description}}</td>
    <td>{{$product->price}}</td>
    <td>
    <form action="{{route('product.destroy', $product)}}" method="POST">
    <a href="{{route('product.show', $product)}}"><button type="button" class="btn btn-secondary"><img src="{{asset('dist/img/eye.png')}}">Ver</button></a>
      <a href="{{route('productos.edit', $product)}}"><button type="button" class="btn btn-primary"><img src="{{asset('dist/img/edit.png')}}" >Editar</button></a>
      @csrf
      @method('put')
      <button type="submit" class="btn btn-danger" onclick="return confirm('Estas seguro que quieres eliminar este producto?')"><img src="{{asset('dist/img/delete.png')}}">Eliminar</button>
      </form>
    </td>
  </tr>
  @endforeach
</tbody>

</table>



</div>
<div class="row">
    <div class="mx-auto">
    {{$products->links()}}
    </div>
    </div>
@endsection
