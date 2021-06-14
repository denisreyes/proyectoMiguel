@extends('layouts.app')

@section('content')
<div class="container card bg-secondary" style="box-shadow: 5px 5px 10px gray">
    <br />
 <h2>Lista de Proveedores <a href="proveedores/create"> <button type="button" class="btn btn-success float-right"><img src="{{asset('dist/img/add.png')}}">Agregar proveedor</button></a> </h2>

<h6>
    @if($search)
    <div class="alert alert-info" role="alert">
    El resultado para '{{$search}}' es:
    </div>
    @endif

  </h6>



<table class="table">
    <thead>
  <tr>
    <th scope="col">id</th>
    <th scope="col">Nombre</th>
    <th scope="col">Telefono</th>
    <th scope="col">Correo</th>
    <th scope="col">Acciones</th>
     </tr>
</thead>
<tbody>
@foreach ($providers as $provider)
  <tr>
    <th scope="row">{{$provider->id}}</th>
    <td>{{$provider->name}}</td>
    <td>{{$provider->phonenumber}}</td>
    <td>{{$provider->email}}</td>
    <td>
    <form action="{{route('proveedores.destroy', $provider)}}" method="POST">
    <a href="{{route('proveedores.show', $provider)}}"><button type="button" class="btn btn-secondary"><img src="{{asset('dist/img/eye.png')}}">Ver</button></a>
      <a href="{{route('proveedores.edit', $provider)}}"><button type="button" class="btn btn-primary"><img src="{{asset('dist/img/edit.png')}}" >Editar</button></a>
      @csrf
      @method('put')
      <button type="submit" class="btn btn-danger" onclick="return confirm('Estas seguro que quieres eliminar este proveedor?')"><img src="{{asset('dist/img/delete.png')}}">Eliminar</button>
      </form>
    </td>
  </tr>
  @endforeach
</tbody>

</table>

<div class="row">
<div class="mx-auto">
{{$providers->links()}}
</div>
</div>

</div>
@endsection
