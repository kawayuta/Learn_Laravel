@extends('layouts.app')
@section('content')

<div class="container">


    <div class=" col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                Model
            </div>
            <ul class="panel-body-fl">
                @foreach ($articles_model as $model)
                    <li>
                    <a href="{{action('ArticlesController@show', $model->id)}}">
                        {{$model->title}}
                    </a>
                    {{$model->category}}
                    {{$model->tag}}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class=" col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                View
            </div>
            <ul class="panel-body-fl">
                @foreach ($articles_view as $view)
                    <li>
                    <a href="{{action('ArticlesController@show', $view->id)}}">
                        {{$view->title}}
                    </a>{{$view->category}}
                    {{$view->tag}}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class=" col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                Controller
            </div>
            <ul class="panel-body-fl">
                @foreach ($articles_controller as $controller)
                <li>
                    <a href="{{action('ArticlesController@show', $controller->id)}}">
                        {{$controller->title}}
                    </a>
                    {{$controller->category}}
                    {{$controller->tag}}
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class=" col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                Routes
            </div>
            <div class="panel-body-fl">
            </div>
        </div>
    </div>

    <div class=" col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                Redirect
            </div>
            <div class="panel-body-fl">
            </div>
        </div>
    </div>

    <div class=" col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                ActiveRecord
            </div>
            <div class="panel-body-fl">
            </div>
        </div>
    </div>


    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                Validation
            </div>
            <div class="panel-body-fl">
            </div>
        </div>
    </div>


    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                Helper
            </div>
            <div class="panel-body-fl">
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                Command
            </div>
            <div class="panel-body-fl">
            </div>
        </div>
    </div>


    <div class=" col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                All Contents
            </div>
            <ul class="panel-body-fl">
                @foreach ($articles as $article)
                    <li>
                    <a href="{{action('ArticlesController@show', $article->id)}}">
                        {{$article->title}}
                    </a>
                    {{$article->body}}
                    {{$article->category}}
                    {{$article->tag}}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

</div>
@endsection
