@extends('app')

@section('content')
	<h1> Edit a Article</h1>

	
	{!! Form::model($article, [ 'method' => 'PATCH', 'url' => 'articles/'.$article->id]) !!}

		@include('articles.form', ['submitButtonText' => 'Update Article'])

	{!! Form::close() !!}



@stop()