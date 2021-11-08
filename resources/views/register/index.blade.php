@extends('layouts.base')


@section('page-name', "Регистрация")


@section('page-content')
    <div class="form_div">
         <form action="/register" method="post">
            @csrf
            <input type="text" class="input" id="name" name="name" placeholder="Имя">
            @error('name')
                <div class="danger_text">{{$message}}</div>
            @enderror


            <input type="text" class="input" id="email" name="email" placeholder="Почта">
            @error('email')
                <div class="danger_text">{{$message}}</div>
            @enderror


            <input type="text" class="input" id="password" name="password" placeholder="Пароль">
            @error('password')
                <div class="danger_text">{{$message}}</div>
            @enderror

            <input type="text" class="input" id="re_password" name="re_password" placeholder="Повторно пароль">
            @error('re_password')
                <div class="danger_text">{{$message}}</div>
            @enderror

            <br>

            <div class="form_radio_group">
                <div class="form_radio_group-item">
                    <input id="radio-1" type="radio" name="gender" value="male" checked>
                    <label for="radio-1">Мужкой</label>
                </div>
                <div class="form_radio_group-item">
                    <input id="radio-2" type="radio" name="gender" value="netral">
                    <label for="radio-2">Нетралный</label>
                </div>
                <div class="form_radio_group-item">
                    <input id="radio-3" type="radio" name="gender" value="female">
                    <label for="radio-3">Женский</label>
                </div>
            </div>

            @error('gender')
                <div class="danger_text">{{$message}}</div>
            @enderror



            <input class="submit" type="submit" value="Регестрация">
        </form>
    </div>
@endsection