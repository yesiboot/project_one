@extends('layouts.admin')

@section('title','Crear Articulos')

@section('content')

@if(count($errors) >0)
<div class="alert alert-danger" role="alert">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach
	</ul>
</div>
@endif

           {!! Form::open(['route' => 'admin.articles.store', 'method' => 'POST', 'files'=>true]) !!}
				<div class="form-group">
					{!! Form::label('title','titulo') !!}
					{!! Form::text('title',null,['class' =>'form-control', 'placeholder' =>'Titulo del articulo','required'])!!}
				</div>
				<div class="form-group">
					{!! Form::label('content','Contenido') !!}
					{!! Form::textarea('content',null,['class' =>'form-control', 'placeholder' =>'Contenido del articulo','required'])!!}
				</div>

				<div class="form-group">
					{!! Form::label('categoria','categoria') !!}
					{!! Form::select('category_id',$categories,null,['class' =>'form-control'])!!}
				</div>

					<div class="form-group">
					
					{!! Form::hidden('user_id',Auth::user()->id,null,['class' =>'form-control'])!!}
				</div>

				<div class="form-group">
					{!! Form::label('Imagen','Imagen') !!}
					{!! Form::file('path')!!}
				</div>


				
				<div class="form-group">
					{!! Form::submit('Registrar', ['class' =>'btn btn-primary']) !!}
					
				</div>



			    
			{!! Form::close() !!}
@endsection		