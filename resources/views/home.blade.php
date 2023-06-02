@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Список мероприятий</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Добро пожаловать!
                    </div>
                    </div>
                    </div>
                        @foreach($events as $event)
                            <div class="col-12 col-md-12 single-card">
                                <div class="col-12 col-md-12 h-card">
                                    {{ $event->name_event }} - {{ $event->date_event }}
                                </div>
{{--                                                            <div class="card-data">--}}
                                <div class="col-12 col-md-8 table-description">
                                    {{ $event->description }}
                                </div>
                                <div class="col-12 col-md-4 table-data">
                                    {{ $event->address }}
                                    <p class="card-price">Цена: {{ $event->price }}р</p>
                                    <p>
                                        <button class="card-button">
                                            Купить билеты
                                        </button>
                                    </p>
                                </div>
{{--                                                            </div>--}}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
