@extends('layouts.app')

@section('title', 'Создание Статьи')

@section('content')

    <div class="row d-flex justify-content-center">

        <!--Grid column-->
        <div class="col-md-6 mb-r">

            <!--Form with header-->
            <div class="card card-outline-none">
                <div class="card-body">
                    <!--Header-->
                    <div class="text-center deep-purple-text">
                        <h3>Создание Статьи:</h3>
                        <hr class="mt-2 mb-2">
                    </div>

                    <form class="form-horizontal  mt-4" method="POST" action="{{ route('article.store') }}">
                        {{ csrf_field() }}
                        <!--Body-->
                        <div class="md-form form-group {{ $errors->has('title') ? ' has-error' : '' }}">

                            <input id="name" type="text" class="form-control" name="title" value="{{ old('title') }}" minlength="2" maxlength="50" required autofocus>

                            <label for="name">Название</label>
                            @if ($errors->has('title'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                            @endif

                        </div>

                        <div class="md-form form-group {{ $errors->has('excerpt') ? ' has-error' : '' }}">
                            <textarea id="excerpt" type="text" class="md-textarea" name="excerpt" minlength="2" maxlength="50" required>{{ old('excerpt') }}</textarea>

                            @if ($errors->has('excerpt'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('excerpt') }}</strong>
                                </span>
                            @endif
                            <label for="excerpt">Краткое писание</label>
                        </div>


                        <div class="form-group">
                            <label>Раздел</label>
                            <select class="form-control" name="category_id">
                                @foreach ($categories as $key => $category)
                                    <option value="{{$category->id}}"  @if($key == 0) selected @endif>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="md-form form-group {{ $errors->has('body') ? ' has-error' : '' }}">

                            {{--<input id="body" type="text" class="form-control" name="body" value="{{ old('body') }}" minlength="2" maxlength="50" required>--}}
                            <textarea id="body" type="text" class="" name="body" required>{{ old('body') }}</textarea>

                            {{--<label for="body">body</label>--}}
                            @if ($errors->has('body'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </span>
                            @endif

                        </div>

                        <div class="text-center">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
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
