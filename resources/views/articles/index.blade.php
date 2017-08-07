@extends('layouts.app')
@section('content')

    <div class="container">
        <div>
            <?php $article_count = 0;?>
            @foreach ($articles->reverse() as $article)
                @if ($article_count < 3)
                    <div class=" col-md-4 ">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="{{ action('ArticlesController@show', $article->id) }}">
                                    {{$article->title}}
                                </a>
                            </div>

                            @if (!empty($article->fig_orig) && $article_count < 3)
                                <?php $image_base64 = base64_encode($article->fig_orig); ?>
                                <div class="article_thumbnail"><img src='data:img/png;base64,{{$image_base64}}'></div>
                            @endif

                            <div class="panel-body-f">
                                {{$article->body}}
                            </div>
                        </div>
                    </div>
                @else
                    <div class=" col-md-6 ">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="{{ action('ArticlesController@show', $article->id) }}">
                                    {{$article->title}}
                                </a>
                            </div>
                            <div class="panel-body-fl">
                                {{$article->body}}
                            </div>
                        </div>
                    </div>

                @endif




                <?php $article_count++;?>
            @endforeach
        </div>
    </div>
@endsection
