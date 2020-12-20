<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/flag-icon-css/css/flag-icon.min.css') }}">

        <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                margin-top: 10%;
                margin-bottom: 5%;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            li {
                list-style-type: none;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-left links">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown">
                        <i class="fas fa-language text-red"></i>
                        {{__('adminlte::menu.language')}}
                    </a>
                    <ul class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
                        <li>
                            <a class="dropdown-item" href="http://127.0.0.1:8000/setLang/en">
                                <i class="flag-icon flag-icon-gb "></i>
                                {{__('adminlte::menu.english')}}
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="http://127.0.0.1:8000/setLang/fr">
                                <i class="flag-icon flag-icon-fr "></i>
                                {{__('adminlte::menu.french')}}
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="http://127.0.0.1:8000/setLang/de">
                                <i class="flag-icon flag-icon-de "></i>
                                {{__('adminlte::menu.german')}}
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="http://127.0.0.1:8000/setLang/es">
                                <i class="flag-icon flag-icon-es "></i>
                                {{__('adminlte::menu.spanish')}}
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="http://127.0.0.1:8000/setLang/it">
                                <i class="flag-icon flag-icon-it "></i>
                                {{__('adminlte::menu.italian')}}
                            </a>
                        </li>
                    </ul>
                </li>
            </div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">{{__('home.login')}}</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">{{__('home.register')}}</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   Laravel {{\Illuminate\Support\Facades\App::getLocale() ?? 'en'}}-{{session()->get('lang') ?? 'en'}}
                </div>
                <div class="align-content-sm-center">
                    <img src="{{asset('image/sqlDiagram.png')}}" alt="sqlDiagramImage">
                </div>
                <div class="links" style="margin-top: 20px">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
<footer>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
</footer>
</html>
