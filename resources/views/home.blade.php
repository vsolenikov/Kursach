@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><img src="/assets/logo.png" class="page-logo" alt=""></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Добро пожаловать на наш сайт Mero. Здесь вы сможете узнать о предстоящих мероприятиях в нашем
                        замечательном городе Тутаеве. У нас есть мозможность просматривать ближайшие мероприятия, а
                        также принять в них участие, узнать где они будут проходить и т.д. Участвуйте!
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 filter-form">
                <form action="##">
                    <div class="span-form">Название:</div>
                    <input type="text">
                    <div class="span-form">Даты:</div>
                    <input type="text"><input type="text">
                    <div class="span-form">Наличие билетов:</div>
                    <input type="checkbox" name="" id="">
                </form>
            </div>
            @foreach($events as $event)
                <div class="col-12 col-md-12 single-card">
                    <div class="col-12 col-md-12 h-card">
                        {{ $event->name_event }} - {{ $event->date_event }}
                    </div>
                    <div class="col-12 col-md-8 table-description">
                        {{ $event->description }}
                    </div>
                    <div class="col-12 col-md-4 table-data">
                        Адрес: {{ $event->address }}
                        <p class="card-price">Цена: {{ $event->price }}р</p>
                        <p>
                            @if(!Auth::guest())
                            <a href="##" class="card-button"
                                    onclick="document.querySelectorAll('#form-{{$event->id}}')[0].style.margin=0;">
                                Купить билеты
                            </a>
                            @else
                                <a href="{{ route('login') }}" class="card-button"
                                        onclick="{{ redirect(route('login')) }}">
                                    Купить билеты
                                </a>
                                @endif
                        </p>
                    </div>
                </div>

                <div class="buy-form" id="form-{{$event->id}}">
                    <h3>Купить билеты на {{$event->name_event}}</h3>
                    <p>Билетов осталось : 34/{{$event->tickets}}</p>
                    <form action="">
                        <a href="javascript:void(0)" class="closer"
                           onclick="document.querySelectorAll('#form-{{$event->id}}')[0].style.margin='250%';">×</a>
                        <span class="label">Дата: <input type="text" readonly value="{{$event->date_event}}"></span><br>
                        <span class="label">Адрес: <input type="text" readonly value="{{$event->address}}"></span><br>
                        <span class="label">Кол-во билетов: <br>
                            <input type="text" id="ticket-{{$event->id}}" value="1">

                            <a href="javascript:void(0)" class="button_plus_minus" style="right: 20%"
                               onclick="document.querySelectorAll('#ticket-{{$event->id}}')[0].value++">+</a>
                            <a href="javascript:void(0)" class="button_plus_minus" style="right: 10%"
                               onclick="if(document.querySelectorAll('#ticket-{{$event->id}}')[0].value>1){document.querySelectorAll('#ticket-{{$event->id}}')[0].value--}">-</a>
                        </span><br>
                        <span class="label">Цена: <input type="text" readonly value="{{$event->price}}"></span><br>
                        <span class="label">Описание: <textarea name="" id="" readonly cols="30"
                                                                rows="10">{{$event->description}}</textarea>

                            <button class="buy-ticket">
                                Заказать
                            </button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>

@endsection
