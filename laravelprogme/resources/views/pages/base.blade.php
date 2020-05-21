<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iz Vladeniya Akello @yield('title')</title>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,700;1,400&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('pages/css/main.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

@yield('forlanding')
<header class="header @yield('class-header-sub')">
    <div class="container">
        <nav class="nav">
            <div class="logo">
                <img src="{{asset('pages/img/logo.png')}}" alt="LOGO">
                <div class="logo__text title-color">
                    <div class="logo__text-first">
                        Питомник собак
                    </div>
                    <div class="logo__text-second">
                        американская акита
                    </div>
                </div>
            </div>
            <div class="gamburger">
                <img src="{{asset('pages/img/gamburger.svg" alt="gamburger')}}">
            </div>
            <ul class="navbar">
                <li>Наши собаки <div class="caret"></div></li>
                <li>Порода акита</li>
                <li>События</li>
                <li>Контакты</li>
            </ul>
            <div class="phone nav__phone">
                +380 93 310 51 95
                <br>+380 95 083 23 85
            </div>
        </nav>

    </div>
</header>
@yield('content')

<footer class="footer">
    <div class="container">
        <div class="footer__block">
            <div class="footer__first-coloumn">
                <div class="about-kennel">
                    2017 - 2020 ©  <b>Iz vladeniay Akello</b>
                    <br>питомник американских акит
                    <br>Владелец: Кривошея Юлия

                </div>
                <div class="footer__rights">
                    Все права защищены
                </div>

            </div>
            <ul class="footer__tabs footer__tabs-main">
                <li>Наши собаки
                    <ul class="footer__tab-sub">
                        <li>Щенки на продажу</li>
                        <!-- <li>Собаки которые<br>принадлежат питомнику</li> -->
                        <li>Собаки нашего питомника</li>
                        <li>Выпускники</li>
                    </ul>
                </li>
                <li class="footer__tabs-col">Порода акита</li>
                <!-- <li class="flex-break break-footer__tabs"></li> -->
                <li class="footer__tabs-col">События</li>
                <li>Контакты
                    <ul class="footer__tab-sub">
                        <li>
                            <div >
                                +380 93 310 51 95
                                <br>+380 95 083 23 85
                            </div>
                        </li>

                        <li>
                            <div class="socials footer__socials">
                                <img class="social" src="{{asset('pages/img/facebook-white.svg')}}" alt="ICON">
                                <img class="social" src="{{asset('pages/img/youtube-white.svg')}}" alt="ICON">
                                <img class="social" src="{{asset('pages/img/instagram-white.svg')}}" alt="ICON">
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>


    </div>
</footer>


<script src="{{asset('pages/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('pages/js/slick.min.js')}}"></script>
<script src="{{asset('pages/js/main.js')}}"></script>
</body>
</html>
