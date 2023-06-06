<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>О нас</title>
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <style>

    </style>
</head>
<body><canvas id="stars"><script src="http://atuin.ru/js/art/stars.js" type="text/javascript"></script></canvas>
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
            <img src="/assets/white-logo.png" class="page-logo" alt=""> <br>

        </div>

        <div class="links about">
            <b>
                Компания Mero занимается размещением информации о мероприятиях, планирующихся в ближайшее время в городе
                Тутаев. Сайт выполняет функции своего рода афиши, где каждый желающий может посомтреть информацию о том
                или ином мероприятии, и оформить заявку чтоб принять в нём участие. А также каждый пользователь может
                пройти простую регистрацию и зарегистировать своё мероприятие, которое будет просмотрено и опубликовано
                (или отклонено) модераторами сайта.
            </b>
        </div>
    </div>
</div>
</body>
</html>
