@extends('layout')

@section('content')
    <h1>Write a New Article</h1>

    <hr/>

    {!! Form::open(['url' => 'articles']) !!}
    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body', null) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Add Article') !!}
    </div>
    {!! Form::close() !!}
@endsection