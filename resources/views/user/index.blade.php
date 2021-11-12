@extends('layouts.base')


@section('page-name', " вход")


@section('page-content')
        <h1 class ="title">Личный кабенет</h1>
        <div class="сhapter">
                        <div stryle="width:100%; ">
                                <img class="avatar" src="{{asset('img/Аватар.png')}}" alt="Аватар" height="200">
                        </div>
                        <span class="name">Имя</span>
                        <span class="rank">Ранг</span>
        </div>
        <a href="/logout" class="logout">Выйти</a>
@endsection