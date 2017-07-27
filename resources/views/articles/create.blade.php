@extends('layout')

@section('content')
    <h1>Write a New Article</h1>

    <hr/>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

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
        {!! Form::submit('Articles') !!}
    </div>
    {!! Form::close() !!}
@endsection