@extends('layouts.admin')

@section('title', 'Categoria')

@section('content')


<table class="table table-striped">
  <thead>
  	<th>Nombre</th>
  </thead>
  <tbody>
  	<tr>
  		<td>{{$category->name}}</td>
  	</tr>
  	
  </tbody>
</table>
	
@endsection