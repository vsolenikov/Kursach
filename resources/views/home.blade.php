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
                    <div class="span-form">Название:</div> <input type="text">
                    <div class="span-form">Даты:</div> <input type="text"><input type="text">
                    <div class="span-form">Наличие билетов:</div> <input type="checkbox" name="" id="">
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
                            <button class="card-button">
                                Купить билеты
                            </button>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
