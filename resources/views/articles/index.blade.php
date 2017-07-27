@extends('layout')

@section('content')
    @foreach ($articles as $article)
        {{$article->title}}
        {{$article->body}}
    @endforeach

    <h1>{{$articles}}</h1>
@endsection