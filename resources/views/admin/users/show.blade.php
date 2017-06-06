@extends('layouts.admin')

@section('title', 'Usuario')

@section('content')


<table class="table table-striped">
  <thead>
    <th>Nombre</th>
    <th>Email</th>
    <th>Tipo</th>

  </thead>

  <tbody>
    <tr>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->type}}</td>
     <td><a class="btn btn-success" href="{{route('admin.users.edit', $user->id)}}" role="button">Editar</td>
     <td><a class="btn btn-danger" href="{{route('admin.users.destroy', $user->id)}}" onclick ="return confirm('Desea Eliminar el registro ')" role="button">Eliminar
  </tbody>
  </tr>
</table>
  
@endsection