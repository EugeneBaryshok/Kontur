<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;

$this->title = 'Озеленение дачного участка в СПб | Услуги озеленения садовых участков';

?>
<style>
    .header {
        background:linear-gradient(to top, rgba(255,255,255,0.7), rgba(255, 255, 255, 1)), url(/img/ozelen_main_new.jpg) no-repeat center fixed;
        background-size:cover;
    }
</style>

<div class="proekt_top" style=" background: url(/img/ozelen_main_new.jpg) no-repeat  center fixed; background-size: cover;">
    <div class="top_bg">
    </div>
    <div class="jumbotron jumbotron-pages">
        <div class="container" style="text-align: left">
            <div class="col-md-5 col-lg-5   " style="background-color: rgba(0,0,0,0.6)">
                <h1>Озеленение дачного участка</h1>
                <p>Это важный комплекс работ, направленный на воссоздание на территории красивой растительной
                    среди</p>
                <!--<button>Взглянуть</button>-->
            </div>
        </div>
    </div>
</div>





<div class="ozelen_1">
    <div class="container">

        <h2 style="margin-bottom: 30px; float: left"><span class="green">Работы по</span> озеленению участка в городе или на даче
        </h2>
        <div class="row">
            <div class="col-md-5 col-lg-5">

<!--                <p>-->
<!--                    <span class="green">Озеленение участка</span> — это, пожалуй, <b>самый важный-->
<!--                        комплекс работ ландшафтного дизайна</b>, направленный-->
<!--                    на <b>воссоздание</b> на территории красивой, приятной для-->
<!--                    человеческого глаза растительной среды.-->
<!--                </p>-->
                <p>


                    Наверняка, многим известен тот факт, что <span class="green_bold">зеленый цвет</span> способствует <b>отдыху
                        и расслаблению</b>.
                    Именно поэтому нам так хорошо и комфортно на природе, где этот цвет доминирующий.
                    Вот почему <b>качественный проект озеленения</b> участка позволит вам создать такое место,
                    где вы сможете отдохнуть от серого городского пейзажа, подышать чистым воздухом,
                    что кстати, тоже является одним из результатов работ.

                </p>
                <p>
                    <span class="green_bold">Наша фирма</span> предлагает помощь в создании плана озеленения
                    участка и выполняет <b>полный комплекс работ</b> по озеленению ландшафтных объектов.
                </p>


            </div>
            <div class="col-lg-offset-1 col-md-5 col-lg-5" style="padding-left: 30px; margin-top:-10px;">

                <div class="nav-images" style="padding-top:50px">

                    <div class="row" style="margin-bottom:20px">

                        <div class="img-container" style="height: 180px;">
                            <a href="<?= Url::to(['articles/gazon'])?>">
                            <h2 class="img-title" style="top:20px;">
                                Устройство<br>газонов
                            </h2>
                                <img src="/img/ozel_tab.jpg">
                            </a>
                        </div>

                    </div>
                    <div class="row" style="margin-bottom:20px">

                        <div class="img-container" style="height: 180px;">
                            <a href="<?= Url::to(['articles/tree'])?>">
                                <h2 class="img-title" style="top:20px;">
                                Посадка деревьев и кустарников
                            </h2>
                                <img src="/img/trees5.jpg">

                            </a>
                        </div>

                    </div>
                    <div class="row" style="margin-bottom:20px">

                        <div class="img-container" style="height: 180px;">
                            <a href="<?= Url::to(['articles/flower'])?>">
                            <h2 class="img-title" style="top:20px;">
                                Устройство цветников
                            </h2>
                                <img src="/img/flowerbeds3.jpg">
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>


<div class="gray_block">
    <div class="container">

        <h2 style="margin-bottom: 30px">План <span class="green">озеленения:</span></h2>

        <div class="row">

            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 img_div">
                <img src="/img/dendroplan.jpg" style="">
            </div>
            <div class="col-md-7 col-lg-7 col-sm-8 col-md-offset-1">
                <p>Чтобы все работы прошли без проблем, необходимо все заранее продумать и перенести на бумагу.
                    Лучше всего для этого подойдет <b><span class="green">план озеленения</span></b>, который должен
                    учитывать множество факторов.
                    Самые <b>важные из них</b> — это <b>размеры участка, состояние почвы, элементы благоустройства,
                        места для посадки кустарников и деревьев, укладки газона, места для клумб</b> и т.д.</p>
                <p>
                    План должен учитывать и специфику озеленяемого участка.
                    Прилегающая территория жилого дома, детского сада, школы или загородного коттеджа —
                    для всех этих объектов существуют свои особенности озеленения.
                </p>
                <p>
                    <b>План озеленения</b> составляется на основе разбивочного чертежа и может включать:
                </p>
                <ul class="dot" style="margin-bottom:90px ">
                    <li><span
                                style="color:black">дорожки, площадки, тротуары, элементы благоустройства, постройки;</span>
                    </li>
                    <li><span style="color:black">   газоны, деревья, кустарники, цветники с наименованием всех
                     используемых растений (их род, вид);</span></li>
                    <li><span style="color:black">   малые архитектурные формы (по возможности).</span></li>
                </ul>


            <button class="purple_button signup"><img src="/img/proj_button.png">Оставить заявку</button>
            </div>
        </div>
    </div>
</div>

<div class="additional_block " style="  background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/img/ozelen_main_new.jpg) no-repeat center fixed;
    background-size: cover;
   ">
    <div class="container">
        <p class="additional_p" style="margin-bottom: 30px">
        
            Компания <span class="text_logo">KOHTYP</span> занимается ландшафтными работами и<BR> озеленением уже 15 лет.
        </p>
        <p class="additional_p" style="margin-bottom: 100px">
            За это время мы реализовали множество проектов, которыми по праву можно гордиться.
            Мы выполняем любые работы и на городской территории, и на дачном участке.
        </p>

            <button class="purple_button signup"><img src="/img/proj_button.png">Оставить заявку</button>
              <a href="<?= Url::to(['price/ozelen'])?>">
            <button class="purple_button"><img src="/img/price_button.png">Прайс-лист</button>
    </div>
</div>