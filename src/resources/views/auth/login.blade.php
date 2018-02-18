@extends('layouts.app')

@section('title', 'Логин')

@section('content')

    <div class="row d-flex justify-content-center">

        <!--Grid column-->
        <div class="col-md-6 mb-r">

            <!--Form with header-->
            <div class="card">
                <div class="card-body">

                    <!--Header-->
                    <div class="form-header orange-gradient">
                        <h3>
                            <i class="fa fa-user"></i> Логни:</h3>
                    </div>

                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <!--Body-->
                        <div class="md-form form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <i class="fa fa-envelope prefix grey-text"></i>

                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            <label for="orangeForm-email">Емаил</label>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                        </div>

                        <div class="md-form form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <i class="fa fa-lock prefix grey-text"></i>
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                            <label for="password">Пароль</label>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-deep-orange waves-effect waves-light">Войти</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--/Form with header-->

        </div>
        <!--Grid column-->

    </div>

@endsection
