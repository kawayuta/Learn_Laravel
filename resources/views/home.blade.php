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
                    {{$model->title}}
                    {{$model->body}}
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
                    {{$view->title}}
                    {{$view->body}}
                    {{$view->category}}
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
                    {{$controller->title}}
                    {{$controller->body}}
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
                    {{$article->title}}
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
