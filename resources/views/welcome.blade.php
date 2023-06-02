<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <style>

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height red-picture">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Mero</a>
                    @else
                        <a href="{{ route('login') }}">Вход</a>
                        <a href="{{ route('register') }}">Регистрация</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Регистрация мероприятий <br>в городе Тутаев
                </div>

                <div class="links">
                    <a href="#">Список мероприятий</a>
                    <a href="#">О нас</a>
                    <a href="#">Авторизация</a>
                    <a href="#">Регистрация</a>
                </div>
            </div>
        </div>
    </body>
</html>
