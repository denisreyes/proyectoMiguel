@extends('layouts.app')

@section('content')
<div class="container card text-white bg-dark" style="box-shadow: 5px 5px 10px gray">
    <br />
 <h2>Lista de Usuarios <a href="usuarios/create"> <button type="button" class="btn btn-success float-right"><img src="{{asset('dist/img/add.png')}}">Agregar usuario</button></a> </h2>

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
    <th scope="col">Nombre</th>
    <th scope="col">Correo</th>
    <th scope="col">Acciones</th>
     </tr>
</thead>
<tbody>
@foreach ($users as $user)
  <tr>
    <th scope="row">{{$user->id}}</th>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>
    <form action="{{route('usuarios.destroy', $user)}}" method="POST">
    <a href="{{route('usuarios.show', $user)}}"><button type="button" class="btn btn-secondary"><img src="{{asset('dist/img/eye.png')}}">Ver</button></a>
      <a href="{{route('usuarios.edit', $user)}}"><button type="button" class="btn btn-primary"><img src="{{asset('dist/img/edit.png')}}" >Editar</button></a>
      @csrf
      @method('put')
      <button type="submit" class="btn btn-danger" onclick="return confirm('Estas seguro que quieres eliminar este usuario?')"><img src="{{asset('dist/img/delete.png')}}">Eliminar</button>
      </form>
    </td>
  </tr>
  @endforeach
</tbody>

</table>



</div>
<div class="row">
    <div class="mx-auto">
    {{$users->links()}}
    </div>
    </div>
@endsection
