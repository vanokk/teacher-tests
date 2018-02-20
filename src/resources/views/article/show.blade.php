@extends('layouts.app')

@section('title', 'Статья')

@section('content')

            <div class="row">
                <div class="col-md-12">
                    <h2 class="h1-responsive font-bold">  {!! $article->title !!}</h2>
                    <p class="text-muted">Просмотров: {!! $article->views !!}</p>
                </div>
            </div>
            <!--/.Page heading-->
            <hr>

            <!--First row-->
            <div class="row mt-5">
                <div class="col-md-12">
                    {!! $article->body !!}
                </div>
            </div>



@endsection
