@extends('layout')

@section('content')

    <h1>{{ $article->title }}</h1>
    <article>
        {{ $article->body }}
        <a href="{{action('ArticlesController@destroy', $article->id)}}">ss</a>
    </article>

@endsection