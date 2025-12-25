@extends('app')

@section('styles')
@vite(['resources/css/main.css'])

@endsection
@section('content')
<div class="container banner">
    <div class="bannerCont">
        <div class="bannerText">
            <div class="bannerIvite">Приглашаем получить</div>
            <h1 class="bannerTitle">Дополнительное
                профессиональное образование <span><br>В Анапском филиале МПГУ</span>
            </h1>
        </div>
        <div class="bannerBtn modal">Записаться на курсы</div>
    </div>
    <div class="bannerImg">
    </div>
</div>
<div class="container adv">
    <div class="advItem">
        <div class="advTitle">Диплом государственного образца</div>
        <div class="advItemImg">
            <img src="images\svg\advCard.svg">
        </div>
    </div>
    <div class="advItem">
        <div class="advTitle">Современный образовательный процесс</div>
        <div class="advItemImg">
            <img src="images\svg\advComp.svg">
        </div>
    </div>
    <div class="advItem">
        <div class="advTitle">Квалифицированные преподаватели</div>
        <div class="advItemImg">
            <img src="images\svg\advDesk.svg">
        </div>
    </div>
    <div class="advItem">
        <div class="advTitle">Интерактивные формы</div>
        <div class="advItemImg">
            <img src="images\svg\advYou.svg">
        </div>
    </div>
</div>
<div class="container addEduc">
    <h2>Программы дополнительного образования</h2>
    <div class="profGrid">
        <div class="profItem">
            <div class="profCont">
                <div class="profItemTitler">Учитель истории
                    и обществознания</div>
                    <div class="profParam">
                        <img src=""
                    </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection