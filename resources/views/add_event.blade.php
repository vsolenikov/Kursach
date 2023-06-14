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

                        Вы организатор? Тогда организуйте своё мероприятие и оставьте заявку на его публикацию<br><br>
                            <form action="{{route('add-event')}}" class="add-form" method="post">
                                @csrf
                                <label for="name_event">Название:</label>
                                <input type="text" name="name_event">

                                <label for="date_event">Дата:</label>
                                <input type="date" name="date_event" style="width: 20%;">

                                <label for="tickets">Кол-во мест:</label>
                                <input type="text" name="tickets" style="width: 20%;"> <br>

                                <label for="address">Адрес:</label>
                                <input type="text" name="address">

                                <label for="price">Цена за билет:</label>
                                <input type="text" name="price">
                                
                                <label for="description">Описание мероприятия</label> <br>
                                <textarea name="description" id="" cols="30" rows="10"></textarea>

                                <input type="submit" class="submit" value="Отправить">
                            </form>
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection
