<!doctype html>
<html lang="{{ app()->getLocale() }}" class="@if(Request::is('/')) full-height @endif">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/mdb.min.css" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body class="@if(!Request::is('/')) default-page @endif ">
        <!--Main Navigation-->
        <header>

            <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar mdb-color lighten-2">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <strong>MDB</strong>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}">Главная
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('categories') }}">Разделы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Profile</a>
                            </li>

                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Войти</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a  class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ Auth::user()->name }} Выйти
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            @endguest
                        </ul>
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="text" placeholder="Поиск" aria-label="Search">
                        </form>
                    </div>
                </div>
            </nav>

            @yield('after-navbar')

        </header>
        <!--Main Navigation-->

        <main>
            <!--Main layout-->
            <div class="container">

                @yield('content')

            </div>
            <!--/.Main layout-->
        </main>

        <!--Footer-->
        <footer class="page-footer center-on-small-only mdb-color lighten-2">
            <!--Footer links-->
            <div class="container">
                <div class="row my-4">
                    <!--First column-->
                    <div class="col-lg-3 col-md-6">
                        <h6 class="h5-responsive title mb-3">
                            <strong>About material design</strong>
                        </h6>
                        <p>Material Design for Bootstrap (MDB) is a powerful Material Design UI KIT for most popular HTML, CSS,
                            and JS framework - Bootstrap.</p>
                    </div>
                    <!--/.First column-->
                    <hr class="w-100 clearfix d-sm-none">
                    <!--Second column-->
                    <div class="col-lg-2 col-md-6 ml-auto">
                        <h6 class="h5-responsive title mb-3">
                            <strong>First column</strong>
                        </h6>
                        <ul>
                            <li>
                                <a href="#!">Link 1</a>
                            </li>
                            <li>
                                <a href="#!">Link 2</a>
                            </li>
                            <li>
                                <a href="#!">Link 3</a>
                            </li>
                            <li>
                                <a href="#!">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.Second column-->
                    <hr class="w-100 clearfix d-sm-none">
                    <!--Third column-->
                    <div class="col-lg-2 col-md-6 ml-auto">
                        <h6 class="h5-responsive title mb-3">
                            <strong>Second column</strong>
                        </h6>
                        <ul>
                            <li>
                                <a href="#!">Link 1</a>
                            </li>
                            <li>
                                <a href="#!">Link 2</a>
                            </li>
                            <li>
                                <a href="#!">Link 3</a>
                            </li>
                            <li>
                                <a href="#!">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.Third column-->
                    <hr class="w-100 clearfix d-sm-none">
                    <!--Fourth column-->
                    <div class="col-lg-2 col-md-6 ml-auto">
                        <h6 class="h5-responsive title mb-3">
                            <strong>Third column</strong>
                        </h6>
                        <ul>
                            <li>
                                <a href="#!">Link 1</a>
                            </li>
                            <li>
                                <a href="#!">Link 2</a>
                            </li>
                            <li>
                                <a href="#!">Link 3</a>
                            </li>
                            <li>
                                <a href="#!">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.Fourth column-->
                </div>
            </div>
            <!--/.Footer links-->

            <!--Copyright-->
            <div class="footer-copyright">
                <div class="containter-fluid">
                    © 2015 Copyright:
                    <a href="https://www.MDBootstrap.com"> MDBootstrap.com </a>
                </div>
            </div>
            <!--/.Copyright-->
        </footer>
        <!--/.Footer-->

        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script src="/js/jquery-3.2.1.min.js"></script>
        <script src="/js//popper.min.js"></script>
        <script src="/js/bootstrap.js"></script>
        <script src="/js/mdb.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
