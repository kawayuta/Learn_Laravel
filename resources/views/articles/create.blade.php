@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default">
                    <div class="panel-heading">イベントの作成</div>
                    <div class="panel-body">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            {!! Form::open(['url' => 'articles', 'files' => 'true']) !!}

                            <div class="form-group">
                                {!! Form::label('title', 'Title:') !!}
                                {!! Form::text('title', null) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('body', 'Body:') !!}
                                {!! Form::textarea('body', null) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('category', 'Category:') !!}
                                {!! Form::select('category',['Model'=>'Model','View'=>'View','Controller'=>'Controller']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('tag', 'Tag:') !!}
                                {!! Form::text('tag', null) !!}
                            </div>

                            <div class="form-group">
                               {!! Form::label('fig_orig', 'Thumbnail:') !!}
                               {!! Form::file('data', null) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::submit('Articles') !!}
                            </div>

                            {!! Form::close() !!}

                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
