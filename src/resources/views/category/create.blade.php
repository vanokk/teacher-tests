@extends('layouts.app')

@section('title', 'Создание Раздела')

@section('content')

    <div class="row d-flex justify-content-center">

        <!--Grid column-->
        <div class="col-md-6 mb-r">

            <!--Form with header-->
            <div class="card card-outline-none">
                <div class="card-body">
                    <!--Header-->
                    <div class="text-center deep-purple-text">
                        <h3>Создание Раздела:</h3>
                        <hr class="mt-2 mb-2">
                    </div>

                    <form class="form-horizontal  mt-4" method="POST" action="{{ route('category.store') }}">
                        {{ csrf_field() }}
                        <!--Body-->
                        <div class="md-form form-group {{ $errors->has('name') ? ' has-error' : '' }}">

                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" minlength="2" maxlength="50" required autofocus>

                            <label for="name">Название</label>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif

                        </div>

                        <div class="md-form form-group {{ $errors->has('desc') ? ' has-error' : '' }}">
                            <textarea id="desc" type="text" class="md-textarea" name="desc" minlength="2" maxlength="50" required>{{ old('value') }}</textarea>

                            @if ($errors->has('desc'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('desc') }}</strong>
                                    </span>
                            @endif
                            <label for="desc">Описание</label>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-deep-purple waves-effect waves-light">Создать</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--/Form with header-->

        </div>
        <!--Grid column-->

    </div>

@endsection
