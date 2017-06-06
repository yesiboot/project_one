@extends('layouts.admin')

@section('title','Editar Articulos:'. $article->title)

@section('content')


           {!! Form::model($article,['route' => ['admin.articles.update',$article], 'method' => 'PUT', 'files'=>true]) !!}
				<div class="form-group">
					{!! Form::label('title','titulo') !!}
					{!! Form::text('title',null,['class' =>'form-control', 'placeholder' =>'Titulo del articulo'])!!}
				</div>
				<div class="form-group">
					{!! Form::label('content','Contenido') !!}
					{!! Form::textarea('content',null,['class' =>'form-control', 'placeholder' =>'Contenido del articulo'])!!}
				</div>

				<div class="form-group">
					{!! Form::label('usuario', 'Usuario') !!}
					{!! Form::select('user_id', $users, null,['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('categoria','categoria') !!}
					{!! Form::select('category_id',$categories,null,['class' =>'form-control'])!!}
				</div>

				@if(empty($article->path))
			      <td><img src="{{asset('images')}}/no-imagen.jpg" style="width:100px;"></td>
			      @else
			      <td><img src="{{asset('images')}}/{{$article->path}}" style="width:100px;"></td>
			      @endif

			    <div class="form-group">
					{!! Form::label('Imagen','Imagen') !!}
					{!! Form::file('path')!!}
				</div>
				
				
					{!! Form::submit('Actualizar', ['class' =>'btn btn-primary']) !!}
					{!! Form::close() !!}
				



			    
			{!! Form::close() !!}
@endsection		