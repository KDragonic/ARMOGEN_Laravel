@extends('layouts.base')


@section('page-name', " вход")


@section('page-content')
        <span class="title">ВХОД</span>
        <div class="form_div">
            <form action="/login" method="post">
                @csrf
                <input type="text" class="input" id="email" placeholder="Почта">
                @error('email')
                    <div class="danger_text">{{$message}}</div>
                @enderror

                <input type="password" class="input" id="password"  placeholder="Пароль">
                @error('password')
                    <div class="danger_text">{{$message}}</div>
                @enderror
                <input class="submit" type="submit" value="Войти">
            </form>
        </div>
@endsection