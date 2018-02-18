@extends('layouts.app')

@section('title', '404')

@section('content')
    <div class="row d-flex justify-content-center">

        <!--Grid column-->
        <div class="col-md-6 mb-r">
            <h1 class="text-yellow text-center" style="font-size: 100px">404</h1>
            <div class="error-page">
                <h3><i class="fa fa-warning text-yellow"></i> Упс! Страница не найдена.</h3>

                <p>
                    Мы не смогли найти страницу, которую вы искали.
                    Между тем, вы можете <a href="{{ route('home') }}">вернуться на главную</a>.
                </p>

            </div>
            <!-- /.error-page -->
        </div>
    </div>


@endsection
