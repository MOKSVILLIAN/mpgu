<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('styles')
</head>
<header class="siteHeader">
    <div class="container">
        <div class="menu">
            <a class="menuItem" href="#">Главная</a>
            <a class="menuItem" href="#">О нас</a>
            <a class="menuItem" href="#">Курсы</a>
            <a class="menuItem" href="#">Контакты</a>
        </div>
        <div class="burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <img src="images\logo\logo 1.svg">
        <div class="headerInfo">
            <a class="phone" href="tel:+79882533485"> <img src="images\svg\iconPhone.svg">+79882533485</a>
            <div class="buttonHead modal">Заказать звонок</div>
            <img class="blindMode" src="images\svg\iconEye.svg">
        </div>
    </div>
</header>

<body>

    <main class="page">
        @yield('content')

    </main>
</body>

</html>