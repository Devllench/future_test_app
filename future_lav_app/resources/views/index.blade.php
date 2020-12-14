@extends('layouts.main')

@section('header')
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-10">
                    <strong>
                        <p>Телефон: (499)340-94-71</p>
                        <p>Email: info@future-group.ru</p>
                    </strong>
                </div>
                <div class="col-sm-2"><img src="{{asset('img/future_test.png')}}" alt="LOGO"></div>
            </div>

            <div class="row">
                <div class="col-sm-10">
                    <strong class="comment-head">Комментарии</strong>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('article')
    <article class="comment">

        <div class="container-fluid">


            <div class="container-fluid">
                <div class="row">

                    <div class="col-sm-12">
                        @foreach($date as $el)
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <p><strong>{{$el -> name}}</strong></p>
                                        </div>
                                        <div class="col-xs-10">
                                            <p>{{$el -> created_at -> format('H:i')}}<tab></tab>{{ $el -> created_at ->format(' d.m.Y')}}</p>
                                        </div>
                                    </div>
                                    <small><p>{{$el -> comment}}</p></small>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <br><br>
                <form class="comm_pls" action="{{route('comment-form')}}" method="post">
                <strong class="comm_pls">Оставить коментарий</strong>
                @csrf
                    <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name">Ваше имя</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="comment">Ваш комментарий</label>
                            <textarea name="comment" id="comment" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5"></div>
                    <div class="col-sm-7">
                        <button type="submit" class="btn btn-light">Отправить</button>
                    </div>
                </div>
            </form>
        </div>
    </article>
@endsection

@section('footer')
    <footer>
        <div class="container-fluid">
            <div class="row align-items-end">
                <div class="col-sm-1"><img src="{{asset('img/future_test_logo2.png')}}" alt="LOGO"></div>
                <div class="col-sm-11">
                    <strong>
                        <p>Телефон: (499)340-94-71</p>
                        <p>Email: info@future-group.ru</p>
                        <p>Адрес: 115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</p>
                    </strong>
                    <br>
                    <p>©2010-2014, Future. Все права защищены</p>
                </div>
            </div>
        </div>
    </footer>
@endsection
