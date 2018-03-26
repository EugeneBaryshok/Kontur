<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
$this->title = 'Продажа натурального камня в СПб';

?>
<style>
    .header {
        background:linear-gradient(to top, rgba(255,255,255,0.7), rgba(255, 255, 255, 1)), url(../img/stone_main_new.jpg) no-repeat center fixed;
        background-size:cover;
    }
</style>

<div class="proekt_top" style=" background: url(/img/stone_main_new.jpg) no-repeat  center fixed; background-size: cover;">
    <div class="top_bg">

    </div>
    <div class="jumbotron jumbotron-pages">
        <div class="container" style="text-align: left">
            <div class="col-md-5 col-lg-5 transp_block">
                <h1>Продажа натурального камня в Санкт-Петербурге</h1>
                <p>Многообразие камня и натуральных материалов погут воссоздать природную красоту</p>
                <!--<button>Взглянуть</button>-->
            </div>
        </div>
    </div>
</div>


<div class="introduction" style="padding-top: 70px">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-lg-5 col-sm-5" style="overflow: hidden">

                <img src="/img/stone_tab.jpg" width="470">
            </div>
            <div class=" col-md-offset-1 col-lg-offset-1 col-md-6 col-lg-6"
                 style="padding-left: 30px;">
                <p>
                    <span class="green_bold">Натуральный камень</span> — естественный натуральный материал, с древнейших времен используемый в строительстве, искусстве и других сферах.
                    Сегодня он снова набирает популярность,
                    так как обладает множеством полезных свойств и качеств.
                    Прочность, долговечность, красота и разнообразие текстур – всего лишь некоторые из них.
                </p>
                <p>
                    Компания   <span class="green" style="font-family: 'Dancing Script', cursive; font-size:24px">KOHTYP</span> предлагает купить натуральный камень
                    для украшения сада, мощения, отделки интерьера.
					
					На нашем складе, по адресу: <span class="green_bold">г.Санкт-Петербург, Петергоф, Ропшинское шоссе, д. 8,</span>  вы можете купить натуральный камень на выбор из имеющегося в  наличии или под заказ.
    
                    Продажа камня осуществляется как <span class="green_bold">оптом</span>, так и в <span class="green_bold">розницу</span> для любых дизайнерских и
                    строительных нужд.
                </p>
                <p>
                    <span class="green_bold">Песчаник, шунгит, известняк, лемезит, сланец, златолит, кварцитопесчаник, брусчатка, булыжник, галька, крошка</span> и пр. породы украсят ваш участок, придав ему первозданный естественный вид с помощью "рваного края" и
                    валунов или строгую четкость рисунка из брусчатки и плит.
                </p>

                <button class="purple_button signup"><img src="/img/proj_button.png">Оставить заявку</button>
                <a href="<?= Url::to(['price/kamen'])?>">
                    <button class="purple_button"><img src="/img/price_button.png">Прайс-лист</button>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="ozelen_1">
    <div class="container">


        <h2 style="margin-bottom: 30px;">Каталог натурального <span class="green">камня</span></h2>
        <hr width="80%" size="1" color="#d3d3d3" align="center">
        <div class="row">
            <div class="grid">
                <figure class="effect-sadie">
                    <img src="/img/stones/peschanik.png" alt="img02"  style="height:230px"/>
                    <figcaption>
                        <h2>Песчаник</h2>
                        <p>от 300 руб./м2</p>
                        <a href="/services/peschanik">View more</a>
                    </figcaption>
                </figure>
                <figure class="effect-sadie">
                    <img src="/img/stones/izvest.png" alt="img14" style="height:230px"/>
                    <figcaption>
                        <h2>Известняк</h2>
                        <p> от 400 руб./м2</p>
                        <a href="/services/izvestnyak">View more</a>
                    </figcaption>
                </figure>
                <figure class="effect-sadie">
                    <img src="/img/stones/zlatotit.png" alt="img14"  style="height:230px"/>
                    <figcaption>
                        <h2>Златолит</h2>
                        <p>от 1300 руб./м2</p>
                        <a href="/services/zlatotit">View more</a>
                    </figcaption>
                </figure>
            </div>
            <div class="grid">
                <figure class="effect-sadie">
                    <img src="/img/stones/bruschatka.png" alt="img02" style="height:230px"/>
                    <figcaption>
                        <h2>Брусчатка</h2>
                        <p>от 1700 руб./м2</p>
                        <a href="/services/bruschatka">View more</a>
                    </figcaption>
                </figure>
                <figure class="effect-sadie">
                    <img src="/img/stones/shungit.png" alt="img14"  style="height:230px"/>
                    <figcaption>
                        <h2>Шунгит</h2>
                        <p>от 800 руб./м2</p>
                        <a href="/services/shungit">View more</a>
                    </figcaption>
                </figure>
                 <figure class="effect-sadie">
                    <img src="/img/stones/lemezit.png" alt="img14"  style="height:230px"/>
                    <figcaption>
                        <h2><strong>Лемезит</strong></h2>
                        <p>от 800 руб./м2</p>
                        <a href="/services/lemezit">View more</a>
                    </figcaption>
                </figure>  
            </div>
			
			<div class="grid">
                <figure class="effect-sadie">
                    <img src="/img/stones/slanec.png" alt="img02" style="height:230px"/>
                    <figcaption>
                        <h2>Сланец</h2>
                        <p>от 1700 руб./м2</p>
                        <a href="/services/slanec">View more</a>
                    </figcaption>
                </figure>
                <figure class="effect-sadie">
                    <img src="/img/stones/kvarcitopeschanik.png" alt="img14"  style="height:230px"/>
                    <figcaption>
                        <h2 style="font-size:30px;">Кварцитопесчаник</h2>
                        <p>от 800 руб./м2</p>
                        <a href="/services/kvarcitopeschanik">View more</a>
                    </figcaption>
                </figure>
                 <figure class="effect-sadie">
                    <img src="/img/stones/bulyzhnik.png" alt="img14"  style="height:230px"/>
                    <figcaption>
                        <h2>Булыжник</h2>
                        <p>от 800 руб./м2</p>
                        <a href="/services/bulyzhnik">View more</a>
                    </figcaption>
                </figure>  
            </div>
			<div class="grid">
                <figure class="effect-sadie">
                    <img src="/img/stones/galka.png" alt="img02" style="height:230px"/>
                    <figcaption>
                        <h2>Галька</h2>
                        <p>от 1700 руб./м2</p>
                        <a href="/services/galka">View more</a>
                    </figcaption>
                </figure>
                <figure class="effect-sadie">
                    <img src="/img/stones/kroshka.png" alt="img14"  style="height:230px"/>
                    <figcaption>
                        <h2>Крошка</h2>
                        <p>от 800 руб./м2</p>
                        <a href="/services/kroshka">View more</a>
                    </figcaption>
                </figure>
                
            </div>
        </div>
    </div>
</div>

<div class="main_block gray_block">
    <div class="container">

        <h2>  Применение <span class="green"> натурального камня</span></h2>
        <hr width="80%" size="1" color="#d3d3d3" align="center">
        <div class="row" style="margin-bottom: 30px">

            <div class="col-md-5 col-lg-5 ">
                <p style="font-size: 18px">
                    <span class="green_bold">Натуральный камень</span> во все времена ценился людьми из-за своей прочности и красоты, надежности и долговечности.
                    Это почти универсальный естественный материал, который может использоваться в строительстве, ландшафтном дизайне сада,
                    в отделке интерьера любого стиля и направления, а также в лечебных целях — для бани.
                    Переоценить значение природного камня в истории невозможно, так как он сыграл огромную роль в развитии
                    человечества как в материальном, так и в духовном аспекте.
            </div>
            <div class="col-md-offset-1 col-md-5 col-lg-5" style="overflow: hidden;">

                <img src="/img/stones_2.jpg" height="350">
            </div>
        </div>
        <div class="row">
            <div class="col-md-11 col-lg-11 ">
                <h2 style="font-size: 30px">  Достоинства <span class="green"> натурального камня</span></h2>
                <p>
                    Самыми лучшими качествами натурального камня в дизайне сада, парка или для строительства являются его  <span class="green_bold">исключительная прочность,
                        стойкость к перепадам температур, коррозии, вместе с тем легкость в обработке, экологичность, неповторимый внешний вид, пожаробезопасность</span> и многое другое.
                    Благодаря прочности и износостойкости, натуральный камень "рваный край" или плитняк может использоваться для мощения в местах с высоким потоком людей и транспорта.
                    Гранитные набережные, площадки, автомобильные и пешеходные дорожки из булыжника и брусчатки,
                    каменные лестницы, подпорные стенки, сооружения из валунов — все это способно простоять веками при правильном уходе.

                </p>
                <p>
                    Натуральный камень для облицовки — <span class="green_bold">очень экологичный и гигиеничный</span> материал в эксплуатации.
                    Он совершенно безвреден не только для организма человека, но и животных. Более того, некоторые типы пород обладают
                    бактерицидным действием, что позволяет применять их при отделке детских помещений и лечебно-оздоровительных учреждений.
                    Например,  <span class="green_bold">габбро-диабаз</span>,доступный у нас в продаже, используется как камень для бань, саун и ландшафтного дизайна,
                    так как отлично аккумулирует  <span class="green_bold">тепло</span>.
                </p>
                <p>
                    Еще одним важным свойством натурального камня, особенно отделочного, является  <span class="green_bold">инертность</span>.
                    Это химическое свойство, суть которого в том, что вещество не вступает в реакцию с другими элементами.
                    Это очень важно для  <span class="green_bold">строительства</span>, так как другие современные отделочные материалы могут содержать активные соединения, вызывающие процессы разрушения.
                </p>
                <p>
                    Самое же ценимое качество природного камня, как декоративного материала, — <span class="green_bold">неповторимый внешний вид</span>.
                    Это один из самых богатых по цвету, разнообразию текстуры и наличию визуальных эффектов материал на планете, используемый для украшения интерьеров и экстерьеров.
                </p>
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

   <h1 style="margin-bottom: 30px; margin-top: 40px;">Цены на натуральный камень</h1>
        <!--<hr width="600" size="1" color="#d3d3d3" align="left">-->
        <div class="row">

           
            <div class="col-md-3 col-lg-3 col-sm-1 col-xs-1" style="overflow: hidden">
                <img class="price_img" src="/img/stone_main_new.jpg" style="height:1550px">
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
                        <td class="subtitle">Песчаник - плитняк (неокантованный, рванные края)</td>
                    </tr>

                    <tr>
                        <td><b>Песчаник (серо-зеленый)</td>
                        <td>1,5 - 2 см</td>
                        <td>330</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>2 - 3 см</td>
                        <td>390</td>
                        <td>35</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>3 - 4 см</td>
                        <td>550</td>
                        <td>27</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>4 - 5 см</td>
                        <td>640</td>
                        <td>18</td>
                    </tr>
                    <tr>
                        <td><b>Песчаник (желто-рыжий)</td>
                        <td>1,5 - 2 см</td>
                        <td>560</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>2 - 3 см</td>
                        <td>650</td>
                        <td>35</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>3 - 4 см</td>
                        <td>750</td>
                        <td>27</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>4 - 5 см</td>
                        <td>950</td>
                        <td>18</td>
                    </tr>
                    <tr>
                        <td><b>Песчаник (желтый с разводами)</td>
                        <td>1,5 - 2 см</td>
                        <td>700</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>2 - 3 см</td>
                        <td>750</td>
                        <td>35</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>3 - 4 см</td>
                        <td>800</td>
                        <td>27</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>4 - 5 см</td>
                        <td>950</td>
                        <td>18</td>
                    </tr>
                    <tr>
                        <td><b>Песчаник (красный)</td>
                        <td>1,5 - 2 см</td>
                        <td>600</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>2 - 3 см</td>
                        <td>650</td>
                        <td>35</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>3 - 4 см</td>
                        <td>700</td>
                        <td>27</td>
                    </tr>
                    <tr>
                        <td  class="subtitle">Песчаник (пиленный)</td>
                      </tr>
                    <tr>
                        <td><b>Плитка (серо-зеленая),<br>4-х сторонняя обработка</td>
                        <td>2х10х10</td>
                        <td>950</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>2х10х15</td>
                        <td> </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>2х10х20</td>
                        <td> </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>3х10х10</td>
                        <td>1000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>3х10х15</td>
                        <td> </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>3х10х20</td>
                        <td> </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>4х10х10</td>
                        <td>1150</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>4х10х15</td>
                        <td> </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>4х10х20</td>
                        <td> </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Плитка (желтая), 4-х сторонняя обработка</td>
                        <td>2х10х10</td>
                        <td>1300</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>2х10х15</td>
                        <td> </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>2х10х20</td>
                        <td> </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>3х10х10</td>
                        <td>1550</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>3х10х15</td>
                        <td> </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>3х10х20</td>
                        <td> </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>4х10х10</td>
                        <td>1900</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>4х10х15</td>
                        <td> </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>4х10х20</td>
                        <td> </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>"Лапша" (серо-зеленая)</td>
                        <td>2 - 5 см</td>
                        <td>950</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>"Лапша" (желтая)</td>
                        <td>2 - 5 см</td>
                        <td>1250</td>
                        <td></td>
                    </tr>



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
                        <td  class="subtitle">Известняк - плитняк( неокантованный, рванные края )</td>
                      </tr>
                        <tr>
                            <td>ИЗВЕСТНЯК ( желто - розовый, Псков ) </td>
                            <td>3 - 6 см </td>
                            <td>350</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>6 - 10 см </td>
                            <td>450</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>ИЗВЕСТНЯК (серо - бурый, Кингисепп) </td>
                            <td>3 - 8 см </td>
                            <td>380</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>8 - 12 см </td>
                            <td>430</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>ИЗВЕСТНЯК (серо-буро - зеленый, Кингисепп) </td>
                            <td>3 - 8 см </td>
                            <td>380</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>8 - 12 см </td>
                            <td>430</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>ИЗВЕСТНЯК (серо - бурый, 1 сторонняя обработка Кингисепп ) </td>
                            <td>2 - 6 см </td>
                            <td>650</td>
                            <td></td>
                        </tr>
                       
                        <tr>
                            <td></td>
                            <td>8 - 12 см </td>
                            <td>800</td>
                            <td>  </td>
                        </tr>
                </tbody>
                </table>


            </div>

             <div class="col-md-3 col-lg-3 col-sm-2 col-xs-2" style=" overflow: hidden">
                <img class="price_img" src="/img/mosh.png" style="height:450px;">
            </div>
        </div>
    </div>
</div>


<div class="price_div ">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-2 col-xs-2" style=" overflow: hidden">
                <img class="price_img" src="/img/pathway.jpg" style="height:1250px;">
            </div>

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
                        <td  class="subtitle">Известняк (пиленный)</td>
                    </tr>
                            <tr>
                                <td>ИЗВЕСТНЯК 5 сторонняя обработка, </td>
                            </tr>
                            <tr>
                                <td>толщина 3-4 см</td>
                                <td>10 х 10</td>
                                <td>от 1600</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>10 х 15</td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>10 х 20</td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>10 х 25</td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>10 х 30</td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>ИЗВЕСТНЯК 5 сторонняя обработка, </td>
                            </tr>
                            <tr>
                                <td>толщина 3-4 см </td>
                            </tr>
                            <tr>
                                <td>( со сколом )</td>
                                <td>10 х 10</td>
                                <td>от 2100</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>10 х 15</td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>10 х 20</td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>10 х 25</td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>10 х 30</td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>ИЗВЕСТНЯК 6-ти сторонняя обработка, длинна до 30 см,</td>
                            </tr>
                            <tr>
                                <td>толщина 3-7 см</td>
                                <td>3 см</td>
                                <td>1800</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>4 см</td>
                                <td>1850</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>5 см</td>
                                <td>1900</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>6 см</td>
                                <td>2000</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td> 7 см</td>
                                <td>2100 </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>"ЛАПША" 3-х сторонняя обработка</td>
                                <td> </td>
                                <td>900</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>БРУСЧАТКА ГРАНИТНАЯ </td>
                            </tr>
                            <tr>
                                <td>( пилено - колотая )</td>
                                <td>5 х 5х5</td>
                                <td>от 1800</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>10х10х10</td>
                                <td>от 2000</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>ШУНГИТ</td>
                                <td>2 - 4 см</td>
                                <td>700</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>4 - 6 см</td>
                                <td>800</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>ЗЛАТОЛИТ (неокантованный, светло-зеленый)</td>
                                <td>2 - 3 см</td>
                                <td>650</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>3 - 4 см</td>
                                <td>800</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>ЗЛАТОЛИТ </td>
                            </tr>
                            <tr>
                                <td>(5-ти ст.обр. без скола)  </td>
                                <td>2,5x5x10</td>
                                <td>1500</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>3,5х10х20</td>
                                <td>1600</td>
                                <td> </td>
                            </tr>


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
                            <td  class="subtitle">Галька, булыжник</td>
                        </tr>
                            <tr>
                                <td>ГАЛЬКА озерная (бело-серая)</td>
                                <td>мелкой фракции</td>
                                <td>20</td>
                                <td>за кг</td>
                            </tr>
                            <tr>
                                <td>ГАЛЬКА озерная (бело-серая)</td>
                                <td>крупной фракции</td>
                                <td>20</td>
                                <td>за кг</td>
                            </tr>
                            <tr>
                                <td>БУЛЫЖНИК гранитный (серый) с доставкой</td>
                                <td>20-70, 70-150, 150-300, 300-600</td>
                                <td>от 2500</td>
                                <td>за м3</td>
                            </tr>
                            <tr>
                                <td>ГАЛЬКА морская (красная)</td>
                                <td>разной фракции</td>
                                <td>18</td>
                                <td>за кг</td>
                            </tr>
                            <tr>
                                <td  class="subtitle">Габбро-диабаз</td>
                            </tr>
                            <tr>
                                <td>БРУСЧАТКА </td>
                            </tr>
                            <tr>
                                <td>пилено-колотая</td>
                                <td>10х10x10</td>
                                <td>от 2000</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>10х10x5</td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>8х8x8</td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>8х8x5</td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>5х5x5</td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td  class="subtitle">Кварцитопесчаник мурманский</td>

                            </tr>
                            <tr>
                                <td>КВАРЦИТОПЕСЧАНИК (волна)</td>
                                <td>1,5 - 2 см</td>
                                <td>700</td>
                                <td>40</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>2 - 3 см</td>
                                <td>750</td>
                                <td>35</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>3 - 5 см</td>
                                <td>900</td>
                                <td>27</td>
                            </tr>
                            <tr>
                                <td>КВАРЦИТОПЕСЧАНИК (ровный)</td>
                                <td>1,5 - 2 см</td>
                                <td>650</td>
                                <td>40</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>2 - 3 см</td>
                                <td>750</td>
                                <td>35</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>3 - 4 см</td>
                                <td>850</td>
                                <td>27</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>4 - 5 см</td>
                                <td>900</td>
                                <td>18</td>
                            </tr>
                            <tr>
                                <td>ШУНГИТ</td>
                                <td>2 - 4 см</td>
                                <td>700</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>4 - 6 см</td>
                                <td>800</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>ЗЛАТОЛИТ ( неокантованный, светло - зеленый )</td>
                                <td>2 - 3 см</td>
                                <td>650</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>3 - 4 см</td>
                                <td>800</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>ЗЛАТОЛИТ </td>
                            </tr>
                            <tr>
                                <td>(5-ти ст.обр. без скола)  </td>
                                <td>2,5x5x10</td>
                                <td>1500</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>3,5х10х20</td>
                                <td>1600</td>
                                <td> </td>
                            </tr>
                        </tbody>
                    </table>


                </div>

                <div class="col-md-3 col-lg-3 col-sm-2 col-xs-2" style=" overflow: hidden">
                    <img class="price_img" src="/img/galka.jpg" style="height:100%;">
                </div>
            </div>
        </div>
    </div>


<div class="additional_block " style="  background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/img/stone_main_new.jpg) no-repeat center fixed;
    background-size: cover;
   ">
    <div class="container" style="text-align: center">
        <div class="row">
            <div class="col-md-12">
                <p style="margin-bottom: 30px;">
                    В целом, о натуральном камне и его достоинствах можно написать очень много, и все равно еще останется, что-то, о чем можно рассказать.
                    <br/>
                    Приходите в офис  <span class="green" style="font-family: 'Dancing Script', cursive; font-size:24px">KOHTYP</span>, и мы расскажем вам о камне все, поможем выбрать натуральный камень и купить породу почти любой текстуры,
                    а также различных физических свойств и форм.
                </p>
            </div>

            <button class="purple_button signup"><img src="/img/proj_button.png">Оставить заявку</button>
            <a href="<?= Url::to(['price/kamen'])?>">
                <button class="purple_button"><img src="/img/price_button.png">Прайс-лист</button>
        </div>
    </div>
</div>