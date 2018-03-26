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


<div class="price_div">
<div class="container ">
        <div class="row">
            <div class="col-md-offset-2 col-lg-offset-0 col-md-8 col-lg-11 col-sm-12 col-xs-12 orange_block">
                <p style="margin-bottom: 20px; font-size: 38px;">АКЦИЯ</p>

                <blockquote class="sales">
                    <p>При заключении договора на выполнение ландшафтных работ  — <span class="orange_bold">ПРОЕКТ В ПОДАРОК!</span></p>
					<p>При заказе ландшафтного проекта — скидка <span class="orange_bold"> 10 %</span> до 31 марта 2018 года.</p>
					
                </blockquote>
            </div>
        </div>
	</div>

    <div class="container">
        <h1 style="margin-bottom: 30px; margin-top: 40px;">Цены на озеленение</h1>
        <!--<hr width="600" size="1" color="#d3d3d3" align="left">-->
        <div class="row">

           
            <div class="col-md-3 col-lg-3 col-sm-1 col-xs-1" style="overflow: hidden">
                <img class="price_img" src="/img/ozelen_main_new.jpg" style="height:800px">
            </div>
            <div class="col-md-9 col-lg-9 col-sm-10 col-xs-10" style="padding-left: 20px">
                <table class="table" cellspacing="0" cellpadding="0" border="0">
                    <thead>
                        <th align="center">Виды работ</th>
                        <th data-breakpoints="mobile tablet" align="center">Ед. <br>измер.</th>
                        <th  valign="top" align="center">Цена, <br>руб.</th>
                        <th data-breakpoints="mobile tablet" align="center">Примечание</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="4" class="subtitle">Устройство газонов</td>
                    </tr>

                    <tr>
                        <td>Обыкновенный (садово-парковый)</td>
                        <td>м2</td>
                        <td>180</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Партерный</td>
                        <td>м2</td>
                        <td>220</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Луговой (с цветами и луговыми злаками; мавританский)</td>
                        <td>м2</td>
                        <td>200</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Специальный (на склонах, на газонных решетках)</td>
                        <td>м2</td>
                        <td>от 270</td>
                        <td>В завис. от уклона и констр.</td>
                    </tr>
                    <tr>
                        <td>Рулонный</td>
                        <td>м2</td>
                        <td>230</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Спортивный</td>
                        <td>м2</td>
                        <td>от 250</td>
                        <td>В зависимости от толщины основания</td>
                    </tr>
                    <tr>
                        <td>Посев травосмеси без подготовки основания</td>
                        <td>м2</td>
                        <td>40</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Подготовка основания 10-20 см</td>
                        <td>м2</td>
                        <td>140</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Подготовка основания с использованием сетки от кротов</td>
                        <td>м2</td>
                        <td>от 200</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="4" class="subtitle">Посадка живых изгородей</td>
                    </tr>
                    <tr>
                        <td>Однорядная</td>
                        <td>м.п.</td>
                        <td>350</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Двурядная</td>
                        <td>м.п.</td>
                        <td>450</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Однорядная из колючих растений</td>
                        <td>м.п.</td>
                        <td>400</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Двурядная из колючих растений</td>
                        <td>м.п.</td>
                        <td>500</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Посадка кустарников в куртины</td>
                        <td>м2</td>
                        <td>700</td>
                        <td></td>
                    </tr>
                </table>

                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="price_div gray_block">
    <div class="container">
        <div class="row">

            <div class="col-md-9 col-lg-9 col-sm-10 col-xs-10">
                <table class="table" cellspacing="0" cellpadding="0" border="0">
                    <thead>
                    <th align="center">Виды работ</th>
                    <th data-breakpoints="mobile tablet" align="center">Ед. <br>измер.</th>
                    <th data-breakpoints="mobile" valign="top" align="center">Цена, <br>руб.</th>
                    <th data-breakpoints="mobile tablet" align="center">Примечание</th>
                    </thead>
                    <tbody>

                    <tr>
                        <td colspan="4" class="subtitle">Посадка деревьев</td>
                    </tr>
                    <tr>
                        <td>Лиственное - высотой до 2 м</td>
                        <td>шт.</td>
                        <td>от 900</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>Лиственное – от 2 м до 3 м</td>
                        <td>шт.</td>
                        <td>от 1700</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>Хвойное – до 2 м</td>
                        <td>шт.</td>
                        <td>от 1400 </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>Хвойное – от 2 м до 3 м</td>
                        <td>шт.</td>
                        <td>от 3500</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>Крупномерные деревья – более 3 м</td>
                        <td>шт.</td>
                        <td>Договорная</td>
                        <td>От высоты, породы, D кома</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="subtitle">Посадка кустарников</td>
                    </tr>
                    <tr>
                        <td>Лиственные</td>
                        <td>шт.</td>
                        <td>300</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>Лиственные колючие</td>
                        <td>шт.</td>
                        <td>320</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>Хвойные до 1 м</td>
                        <td>шт.</td>
                        <td>от 700</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>Рододендроны</td>
                        <td>шт.</td>
                        <td>700</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>Розы садовые</td>
                        <td>шт.</td>
                        <td>450</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td class="subtitle">Посадка лиан</td>
                        <td>шт.</td>
                        <td>200</td>
                        <td>(клематисы - 350)</td>
                    </tr>
                    <tr>
                        <td class="subtitle">Посадка водных растений</td>
                        <td>шт.</td>
                        <td>350</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td class="subtitle">Устройство розария</td>
                        <td>м2</td>
                        <td>от 850</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td class="subtitle">Устройство цветников</td>

                    </tr>
                    <tr>
                        <td>Солитерная (одиночная) посадка</td>
                        <td>шт.</td>
                        <td>от 30 до 80</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>Клумбы, рабатки, бордюры</td>
                        <td>м2</td>
                        <td>650</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>Партерные (с рисунком и с инертными матер.)</td>
                        <td>м2</td>
                        <td>от 950</td>
                        <td>В зависимости от сложности рисунка</td>
                    </tr>
                    <tr>
                        <td>Миксбордеры</td>
                        <td>м2</td>
                        <td>от 850</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>Подготовка почвы для цветников</td>
                        <td>м2</td>
                        <td>400</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td class="subtitle">Устройство рокария, альпинария</td>
                    </tr>
                    <tr>
                        <td>На плоскости</td>
                        <td>м2</td>
                        <td>от 2300</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>На склонах и рельефных участках</td>
                        <td>м2</td>
                        <td>от 2700</td>
                        <td> </td>
                    </tr>
                </table>

                </tbody>
                </table>


            </div>

             <div class="col-md-3 col-lg-3 col-sm-2 col-xs-2" style=" overflow: hidden">
                <img class="price_img" src="/img/banner_tulips.jpg" style="height:1100px;">
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