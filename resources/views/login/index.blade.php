@extends('layouts.base')


@section('page-name', "Вход")


@section('page-content')
        <div class="сhapter">
            <span class="title">ВХОД</span>
            <form action="/login" method="post">
                @csrf
                <input type="text" class="input" id="email" name="email" placeholder="Почта">
                @error('email')
                    <div class="danger_text">{{$message}}</div>
                @enderror

                <input type="password" class="input" id="password" name="password" placeholder="Пароль">
                @error('password')
                    <div class="danger_text">{{$message}}</div>
                @enderror

                <div class="checkbox">
                    <input type="checkbox" name="remember" value="on">
                    <label for="remember">Запомнить меня</label>
                </div>

                <input class="submit" type="submit" value="Войти">
            </form>
            <a href="/register" class="text_route">Новинкий, тогда тебе на [РЕГЕСТРАЦИЯ]</a>
        </div>
@endsection