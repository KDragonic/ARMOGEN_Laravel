<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-name')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('img/logo.ico')}}" type="image/x-icon">
</head>
<body class="d-flex flex-column">
    {{-- <div id="app"> --}}

    @include('includes.header')

    @yield('page-content')  

    {{-- @include('includes.footer') --}}

    {{-- </div> --}}

    <script src="{{mix('js/app.js')}}"></script>
</body>
</html>