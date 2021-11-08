<header>
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-5 col-md-3">
                <a class="text-white text-decoration-none h3" href="{{route('home.index')}}">
                    ARMOGEN
                </a>  
            </div>
            <div class="col-7 col-md-9">
                <ul class="d-flex p-0 m-0 h-100 justify-content-end align-items-center">
                    <li class="list-unstyled ps-4 fs-5"><a class="text-light text-decoration-none" href="{{route('user.login.index')}}">Вход</a></li>
                    <li class="list-unstyled ps-4 fs-5"><a class="text-light text-decoration-none" href="{{route('user.register.index')}}">Регистрация</a></li>
                </ul>
            </div>
        </div>     
    </div> --}}

    @guest
        <div class="reg_log_icon">
            <a href="{{route('login.index')}}" class="text">
                Вход
            </a>
        </div>
    @endguest

    @auth
        <div class="items">
            <a href="">
                <div class="item item_1"><img src="{{asset('img/Свиток.png')}}" alt="[img]"></div>
            </a>
            <a href="">
                <div class="item item_2"><img src="{{asset('img/Группа людей.png')}}" alt="[img]"></div>
            </a>
            <a href="">
                <div class="item item_3"><img src="{{asset('img/Кубок.png')}}" alt="[img]"></div>
            </a>
        </div>
        {{-- <a href="" class="user_icon">
            <div>
                <img src="{{asset('img/Аватар.png')}}" alt="[img]">
            </div>
        </a> --}}
        <div class="reg_log_icon">
            <a href="{{route('login.index')}}" class="text">
                Выход
            </a>
        </div>
    @endauth
</header>