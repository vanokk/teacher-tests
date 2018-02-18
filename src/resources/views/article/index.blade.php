@extends('layouts.app')

@section('title', 'Разделы')

@section('content')
    <!--Page heading-->
    <div class="row wow fadeIn" data-wow-delay="0.2s">
        <div class="col-md-12">
            <div>
                <a href="{{ route('categories.create') }}" class="btn btn-primary btn-md">Создать раздел</a>
            </div>

            <div>
                <a href="{{ route('articles.create') }}" class="btn btn-primary btn-md">Создать статью</a>
            </div>
        </div>
    </div>


    @if(count($categories)>0)
        @foreach ($categories as $category)
            <div class="row">
                <div class="col-md-12">
                    <h2 class="h1-responsive font-bold">  {!! $category->name !!}</h2>
                    <p class="text-muted"> {!! $category->desc !!}</p>
                </div>
            </div>
            <!--/.Page heading-->
            <hr>

            <!--First row-->
            <div class="row mt-5" >
                <div class="col-lg-4 col-md-12 mb-r">

                    <!--Card Light-->
                    <div class="card">
                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="black-text d-flex flex-row-reverse">
                                <h5 class="waves-effect p-2">Read more <i class="fa fa-chevron-right"></i></h5>
                            </a>
                        </div>
                        <!--/.Card content-->
                    </div>
                    <!--/.Card Light-->

                </div>

                <div class="col-lg-4 col-md-12 mb-r">

                    <!--Card Light-->
                    <div class="card">
                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="black-text d-flex flex-row-reverse">
                                <h5 class="waves-effect p-2">Read more <i class="fa fa-chevron-right"></i></h5>
                            </a>
                        </div>
                        <!--/.Card content-->
                    </div>
                    <!--/.Card Light-->

                </div>

                <div class="col-lg-4 col-md-12 mb-r">

                    <!--Card Light-->
                    <div class="card">
                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="black-text d-flex flex-row-reverse">
                                <h5 class="waves-effect p-2">Read more <i class="fa fa-chevron-right"></i></h5>
                            </a>
                        </div>
                        <!--/.Card content-->
                    </div>
                    <!--/.Card Light-->

                </div>
            </div>
            <!--/.First row-->
            <hr class="extra-margin my-5">
        @endforeach
    @else
        <h2>Разделов пока что нет</h2>
    @endif



@endsection
