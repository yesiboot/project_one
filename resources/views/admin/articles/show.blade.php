@extends('layouts.admin')

@section('title', 'Articulo')

@section('content')


<table class="table table-striped">
  <thead>
  	<th>Titulo</th>
    <th>Contenido</th>
    <th>Autor</th>
    <th>Categoria</th>
    <th>Imagen</th>

  </thead>
  <tbody>
  	<tr>
  		<td>{{$article->title}}</td>
      <td>{{$article->content}}</td>
      <td>{{$article->user->name}}</td>
      <td>{{$article->category->name}}</td>
      <td><img src="{{asset('images')}}/{{$article->path}}" style="width:100px;"></td>
  	</tr>
  	
  </tbody>
</table>
	
@endsection