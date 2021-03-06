<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
$this->title = 'Благоустройство';

?>

<style>
    .header {
        background:linear-gradient(to top, rgba(255,255,255,0.7), rgba(255, 255, 255, 1)), url(/img/blag_index.jpg) no-repeat center fixed;
        background-size:cover;
    }
</style>

<div class="proekt_top" style=" background: url(/img/blag_index.jpg) no-repeat  center fixed; background-size: cover;">
    <div class="top_bg">
    </div>
    <div class="jumbotron jumbotron-pages">
        <div class="container" style="text-align: left">
            <div class="col-md-5 col-lg-5   " style="background-color: rgba(0,0,0,0.6)">
                <h1><?= Html::encode($this->title) ?></h1>
                <p>Если ваш дачный участок
                    похож скорее на дикий пустырь
                    то работы по благоустройству территории — то, что решит проблемы.</p>
                <!--<button>Взглянуть</button>-->
            </div>
        </div>
    </div>
</div>


<div class="ozelen_1">
    <div class="container">


        <h2><span class="green">Подготовка</span> территории</h2>
        <hr width="80%" size="1" color="#d3d3d3" align="center">
        <div class="row">

            <div class="col-md-6 col-lg-6" >
                <div class="circle">
                <img src="/img/blag_img/blag_1.jpg">
            </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <ul class="dot">
                    <li><span style="color:black"> Очистка от мусора, его вывоз или утилизация</span></li>

                    <li><span style="color:black">Выкорчевывание пней, валка больных и старых деревьев,
                        защита ценных насаждений, санитарная Обрезка деревьев;</span></li>

                    <li><span style="color:black"> План благоустраиваемого участка;</span></li>

                    <li><span style="color:black"> Геодезические работы, разметка элементов проекта;</span></li>

                    <li><span style="color:black"> Подготовка почвы: исследование на плодородность, улучшение плодородности,
                        завоз почвы на участок.</span></li>
                </ul>

            </div>
        </div>
    </div>
</div>


<div class="ozelen_1 gray_block">
    <div class="container">

        <h2><span class="green">Мелиоративные работы</span>, создание систем дренажа и
            полива территории</h2>
        <hr width="80%" size="1" color="#d3d3d3" align="center">
        <div class="row">

            <div class="col-md-6 col-lg-6">


                <ul class="dot" style="">

                    <li><span style="color:black"> Создание систем дренажа закрытого и открытого типов;</span></li>

                    <li><span style="color:black">Сооружение подземной системы отвода ливневой и талой воды с твердых покрытий;</span>
                    </li>

                    <li><span style="color:black"> Прокладка электроснабжения, кабелей для декоративного освещения территории, других целей
                        (можно осуществить на более поздней стадии возведения плоскостных сооружений);</span></li>

                    <li><span style="color:black"> Создание системы полива и водоснабжения (выполняются эти работы по благоустройству при условии,
                        что у капитальных построек уже проведен водопровод, канализация, электроснабжение).</span></li>


                </ul>

            </div>
            <div class="col-md-6 col-lg-6">
                <div class="circle">
                    <img src="/img/blag_img/blag_2.jpg">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="ozelen_1">
    <div class="container">

        <h2>Возведение <span class="green">плоскостных сооружений</span></h2>
        <hr width="80%" size="1" color="#d3d3d3" align="center">
        <div class="row">

            <div class="col-md-6 col-lg-6" style="">
                <div class="circle">
                    <img src="/img/blag_img/blag_3.jpg">
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <ul class="dot">
                    <li><span style="color:black">Устройство на территории пешеходных дорожек, проездов с разными видами покрытий
                    (тротуарная плитка, щебенка, природный камень, дерево)</span></li>

                    <li><span
                                style="color:black"> Строительство спортивных и детских площадок на различной основе</span>
                    </li>

                    <li><span style="color:black"> Установка бордюрных камней</span></li>
                </ul>

                <!--<button class="purple_button" style="margin-right: 40px">Прайс-лист</button>-->

            </div>
        </div>
    </div>
</div>


<div class="ozelen_1 gray_block">
    <div class="container">

        <h2>Строительство <span class="green">инженерных сооружений</span></h2>
        <hr width="80%" size="1" color="#d3d3d3" align="center">
        <div class="row">

            <div class="col-md-6 col-lg-6">
                <ul class="dot">
                    <li><span style="color:black">Работы по укреплению откосов</span></li>

                    <li><span
                                style="color:black">Строительство подпорных стенок</span>
                    </li>

                    <li><span style="color:black"> Облицовка вертикальных поверхностей</span></li>
                    <li><span style="color:black"> Строительство пандусов и лестниц</span></li>
                </ul>

                <!--<button class="purple_button" style="margin-right: 40px">Прайс-лист</button>-->

            </div>
            <div class="col-md-6 col-lg-6" style="">
                <div class="circle">
                    <img src="/img/blag_img/services_4.jpg">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blag_banner">
    <div class="container">
        <p class="cursive_text">
            Превращение окружающего пространства в цветущий оазис будет долго радовать<br/>
            Вас и Ваших близких.
        </p>

    </div>
</div>

<div class="ozelen_1">
    <div class="container">

        <h2 >Устройство <span class="green">гидротехнических сооружений </span></h2>
        <hr width="80%" size="1" color="#d3d3d3" align="center">
        <div class="row">


            <div class="col-md-6 col-lg-6" style="">
                <div class="circle">
                    <img src="/img/blag_img/services_3.jpg">
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <ul class="dot">
                    <li><span style="color:black">Строительство водопадов, каналов, бассейнов, каскадов, ручьев;</span>
                    </li>

                    <li><span style="color:black"> Работы по устройству водоемов из пластиковых форм и пленочного материала;</span>
                    </li>

                    <li><span style="color:black"> Строительство плотин, водосбросов и водоспусков.</span></li>
                </ul>

                <!--<button class="purple_button" style="margin-right: 40px">Прайс-лист</button>-->

            </div>
        </div>
    </div>
</div>


<div class="ozelen_1 gray_block">
    <div class="container">

        <h2>Строительство и установка малых <span class="green">архитектурных форм </span>
        </h2>
        <hr width="80%" size="1" color="#d3d3d3" align="center">
        <div class="row">

            <div class="col-md-6 col-lg-6">
                <ul class="dot">


                    <li><span style="color:black">Устройство на территории пешеходных дорожек, проездов с разными видами покрытий (тротуарная плитка,
                    щебенка, природный камень, дерево)</span></li>

                    <li><span
                                style="color:black">   Строительство спортивных и детских площадок на различной основе</span>
                    </li>

                    <li><span style="color:black">  Установка бордюрных камней</span></li>
                </ul>

                <!--<button class="purple_button" style="margin-right: 40px">Прайс-лист</button>-->

            </div>
            <div class="col-md-6 col-lg-6" style="">
                <div class="circle">
                    <img src="/img/blag_img/services_2.jpg">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="additional_block " style="  background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/img/blag_index.jpg) no-repeat center fixed;
    background-size: cover;">
    <div class="container" style="text-align: left">
        <div class="row">
            <div class="col-md-9">
                <p style="margin-bottom: 30px;">
                    Последовательность выполнения представленных выше пунктов может изменяться в зависимости от
                    конкретного случая.
                    Кроме этого, некоторые из них можно проводить одновременно.

                </p>
            </div>
            <div class="col-md-9 col-md-offset-3">
                <p style="">
                    После строительных мероприятий проводится <a href="<?= Url::to(['services/ozelen'])?>"
                                                                 class="main_link" style="color:white; text-decoration: underline">Озеленение</a>.                                                                 >
                         Посадка крупномерных деревьев,
                    устройство газонов и подготовка посадочных ям происходит параллельно работам по благоустройству.
                </p>
            </div>
            <div class="col-md-12" style="text-align: center;margin-top: 60px">
                <a href="<?= Url::to(['price/project'])?>">
                    <button class="purple_button"><img src="/img/price_button.png"> Прайс-лист</button>
                </a>
            </div>
        </div>
    </div>
</div>