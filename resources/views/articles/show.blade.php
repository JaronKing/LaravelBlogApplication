@extends('app')

@section('content')


<h1>Articles</h1>


		<article>
			<h1>{
				{ $article->title }}
			</h1>
			<div class="body">{{ $article->body }}</div>
		</article>


@stop()