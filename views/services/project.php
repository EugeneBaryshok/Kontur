<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;

$this->title = 'Ландшафтное проектирование в Санкт-Петербурге';
//$this->slug = 'project';
//
// $this->params['breadcrumbs'][] = ['label' => 'Услуги', 'url' => ['/blog']];
// $this->params['breadcrumbs'][] = Yii::$app->controller->substr_content($this->title, '90');

?>
<style>
    .header {
        background:linear-gradient(to top, rgba(255,255,255,0.7), rgba(255, 255, 255, 1)), url(/img/project.jpg) no-repeat center fixed;
        background-size:cover;
    }
</style>

<div class="proekt_top" style=" background: url(/img/project.jpg) no-repeat  center fixed; background-size: cover;">
    <div class="top_bg">

    
    <div class="jumbotron jumbotron-pages">
        <div class="container" style="text-align: left">
            <div  class="col-md-5 col-lg-5 transp_block">
                <h1>Ландшафтное проектирование<br> в Санкт-Петербурге</h1>
<!--<h2><span style="font-size: 30px">на частных участках и общественных территориях</span></h2>-->
                <p>На частных участках и общественных территориях</p>
<!--                <p>Ландшафтный проект - появляется в самом начале работ и является основой-->
<!--                    функционального и красивого сада</p>-->

            </div>
        </div>
    </div>
</div>
</div>



<div class="introduction" style="padding-top: 70px">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12" style="overflow: hidden;">

                <img src="/img/project_main_tab.jpg" width="100%">

            </div>
            <div class=" col-md-offset-1 col-lg-offset-1 col-md-6 col-lg-6 col-sm-12 col-xs-12"
                 style="padding-left: 30px; margin-top:-7px;">
                <p style="margin-bottom: 30px">  Такое понятие как – ландшафтное проектирование, ландшафтный проект, появляется в самом начале работ по благоустройству территории Вашего участка.
                </p>
                <span class="slogan_index">Профессионализм на всех этапах проекта, подтвержденным 15-летним опытом в данной сфере. Обращайтесь!</span>


                <button class="purple_button signup"><img src="/img/proj_button.png">Оставить заявку</button>
                <a href="<?= Url::to(['price/project'])?>">
                    <button class="purple_button"><img src="/img/price_button.png">Прайс-лист</button>
                </a>

            </div>

        </div>
    </div>
</div>

<div class="proekt_1" style="padding-bottom: 100px">
    <div class="container">
        <h3 class="h3_main" style="margin-bottom:50px; text-align: center">Проектирование выполняется в три этапа:</h3>

        <img src="/img/I.png" style="position: absolute;top:-70px; left:0; opacity: 0.4; z-index:-1;">
        <h2>Предпроектная <span class="green">подготовка:</span></h2>
        <div class="row">
            <div class="col-md-5 col-lg-5">

                <ol style="padding-top:40px;">
                    <li>Выезд на объект и получение общих представлений об объекте</li>
                    <li>Фотофиксация</li>
                    <li>Составление технического задания от заказчика</li>
                    <li>Топографическая съемка местности</li>
                </ol>


            </div>
            <div class="col-md-7 col-lg-7" style="padding-left: 30px; margin-top:-10px;">


            </div>
        </div>
    </div>
    <img src="/img/mezhevanie_2.png" height="390" width="auto" style=" position: absolute; right: 0; top:125px" class="proekt_img_hide_1">
</div>


<div class="proekt_2">
    <div class="container">
        <img src="/img/II.png" style="position: absolute;top:-70px; right:0;">
        <h2 style="margin-bottom: 30px">Эскизное <span class="green">проектирование:</span></h2>
        <div class="row">
            <div class="col-md-6 col-lg-6" style="  position:relative; overflow: visible">

                <img src="/img/proekt_2.png" width="auto" style="position: absolute; top:0; left:-30%; width:115%" class="proekt_img_hide_2">
            </div>
            <div class="col-md-6 col-lg-6">

                <ol style="margin-bottom:140px; margin-top: 60px; ">
                    <li> Разработка двух вариантов <br/> эскизно-планировочного решения.</li>
                    <li> Утверждение основного варианта с заказчиком, стиль которого и будет представлен по окончании
                        проектирования.
                    </li>
                    <li> Проработка деталей на основании утвержденного эскизного решения и выполнение полного
                        состава проекта.
                    </li>

                </ol>

<!--<!--                <button class="purple_button signup" style="background-color: #3ca630">Заказать</button>-->
<!--                <button class="purple_button signup"><img src="/img/proj_button.png">Заказать проект</button>-->
<!--                 <a href="--><?//= Url::to(['price/project'])?><!--">-->
<!--                    <button class="purple_button"><img src="/img/price_button.png">Прайс-лист</button>-->
<!--                </a>-->
            </div>
        </div>
    </div>
</div>


<div class="proekt_1">
    <div class="container">

        <img src="/img/III.png" style="position: absolute;top:-70px; left:0; opacity: 0.4; z-index:-1;">
        <h2 style="margin-bottom: 30px; ">Рабочее <span class="green">проектирование:</span></h2>
        <div class="row">
            <div class="col-md-5 col-lg-5" style="padding-top: 30px">

                <ol>

                    <li>Генеральный план</li>
                    <li>Разбивочный чертеж</li>
                    <li>План покрытий</li>
                    <li>Проект вертикальной планировки (при необходимости)</li>
                    <li>Схемы дренажа и ливнеотвода</li>
                    <li>Схемы освещения</li>
                    <li>Дендроплан и посадочная ведомость</li>
                    <li>Разбивочный чертеж к дендроплану</li>
                    <li>Согласование материалов мощения, ассортимента озеленения, светильников, малых архитектурных
                        форм
                    </li>
                    <li>Смета на благоустройства и озеленения</li>

                </ol>


            </div>
            <div class="col-md-7 col-lg-7 col-xs-12 col-sm-12" style="padding-left: 30px; margin-top:-10px;">

                <img src="/img/proect_3.jpg" width="100%" style="margin-top: 80px">
            </div>
        </div>
    </div>
</div>


<div class="wood">
    <div class="container">
             <h2>Оформление <span class="green">проектов:</span></h2>

<!--        <img src="/img/I.png" style="position: absolute;top:-70px; left:0; opacity: 0.4; z-index:-1;">-->
        <div class="row" style="margin-top: 60px">
            <div class="col-md-3 col-lg-3 ">

                <div class="dop_doc_div">
                    <img src="/img/genplan.png" height="100">
                    <p style="font-size: 22px" class="green"><b>Схема <br>дренажной системы</b></p>
                    <p class="dop_doc_p">Схема с отображением системы полива и водоснабжения участка</p>
                    <a href="<?=Url::toRoute(['/site/download', 'id' => 'scheme_drenaj.pdf'])?>">
                        <button class="purple_button"><img src="/img/download_arrow_2.png"> Пример</button>
                    </a>
                </div>

            </div>
            <div class="col-md-3 col-lg-3 ">

                <div class="dop_doc_div">
                    <img src="/img/razb.png" height="100">
                    <p style="font-size: 22px" class="green"><b>Схема <br>освещения</b></p>
                    <p class="dop_doc_p">Схема освещения участка, фонарей, точек подключения к сети</p>
                    <a href="<?=Url::toRoute(['/site/download', 'id' => 'scheme_light.pdf'])?>">
                        <button class="purple_button"><img src="/img/download_arrow_2.png"> Пример</button>
                    </a>
                </div>

            </div>
            <div class="col-md-3 col-lg-3 ">

                <div class="dop_doc_div">
                    <img src="/img/denplan.png" height="100" >
                    <p style="font-size: 22px" class="green"><b>План <br> покрытий</b></p>
                    <p class="dop_doc_p">Метраж и расположение всех видов покрытий на участке</p>
                    <a href="<?=Url::toRoute(['/site/download', 'id' => 'plan_pokrytii.pdf'])?>">
                        <button class="purple_button"><img src="/img/download_arrow_2.png"> Пример</button>
                    </a>
                </div>

            </div>
            <div class="col-md-3 col-lg-3 ">

                <div class="dop_doc_div">
                    <img src="/img/razb.png" height="100" >
                    <p style="font-size: 22px" class="green"><b>План <br>посадок</b></p>
                    <p class="dop_doc_p">План работ по озеленению и ведомость растений</p>
                    <a href="<?=Url::toRoute(['/site/download', 'id' => 'razbiv_chertezh.pdf'])?>">
                        <button class="purple_button"><img src="/img/download_arrow_2.png"> Пример</button>
                    </a>
                </div>

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

        <h1 style="margin-bottom: 30px; margin-top: 40px;">Цены на ландшафтное проектирование</h1>

        <!--<hr width="600" size="1" color="#d3d3d3" align="left">-->

        <div class="row">

            <div class="col-md-3 col-lg-3 col-sm-1 col-xs-1" style="overflow: hidden">
                <img class="price_img" src="/img/img_0017.jpg" style="height:100%">
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
                        <td class="subtitle">Предпроектные работы:</td>
                    </tr>
                    <tr>
                        <td>Консультация специалиста с выездом на участок</td>

                    </tr>
                    <tr>
                        <td> - Город</td>
                        <td></td>
                        <td>1 000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td> - До 50км</td>
                        <td></td>
                        <td>2 500</td>
                        <td></td>
                    </tr>
                    <tr>

                        <td> - Дальше 50км</td>
                        <td></td>
                        <td>Договорная</td>

                    </tr>
                    <tr>
                        <td>Анализ почвы</td>
                        <td>Проба</td>
                        <td>8 000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Топографическая съемка</td>
                        <td>100 м2</td>
                        <td>800</td>
                        <td>(от 12 000 руб.)</td>
                    </tr>
                    <tr>
                        <td class="subtitle">
                            Проект до 20 соток, входит в комплект:
                        </td>
                        <td class="subtitle">Комплект</td>
                        <td class="subtitle">52 000</td>
                    </tr>
                    <tr>
                        <td>Выезд и обмер участка</td>

                    </tr>
                    <tr>

                        <td>Эскизное проектирование
                            (разработка эскизов – 2 шт)
                        </td>

                    </tr>
                    <tr>

                        <td>Генеральный план</td>

                    </tr>
                    <tr>

                        <td>Схема дренажной системы и ливнеотвода</td>

                    </tr>
                    <tr>

                        <td>План покрытия</td>

                    </tr>
                    <tr>

                        <td>Дендроплан и посадочная ведомость</td>

                    </tr>
                    <tr>

                        <td>Сметы на благоустройство и озеленение</td>

                    </tr>

                    <tr>

                        <td class="subtitle">Проект 21 - 30 соток</td>
                        <td class="subtitle">Комплект</td>
                        <td class="subtitle">66 000</td>

                    </tr>

                    <tr>

                        <td class="subtitle">Проект 31 - 40 соток</td>
                        <td class="subtitle">Комплект</td>
                        <td class="subtitle">80 000</td>

                    </tr>
                    <tr>

                        <td class="subtitle">Проект более 40 соток</td>
                        <td class="subtitle">Комплект</td>
                        <td class="subtitle">Договорная</td>

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

                        <td>Дендроплан (отдельно) в т.ч.:
                            посадочная ведомость;
                            посадочный чертеж;
                            смета на озеленение
                        </td>
                        <td>100 м2</td>
                        <td>600</td>
                        <td>(от 12 000 руб.)</td>
                    </tr>
                    <tr>

                        <td>Дополнительный эскизный вариант</td>
                        <td>100 м2</td>
                        <td>400-00</td>
                        <td>(от 6 000 руб.)</td>
                    </tr>
                    <tr>

                        <td>План вертикальной планировки</td>
                        <td>шт.</td>
                        <td>от 8 000</td>
                        <td></td>
                    </tr>
                    <tr>

                        <td>Схема дренажной системы, ливнеотвода
                            (схема размещения дрен, ведомость материалов, смета)
                        </td>
                        <td>100 м2</td>
                        <td>400</td>
                        <td>(от 6 000 руб.)</td>
                    </tr>
                    <tr>

                        <td>Схема системы освещения (схема прокладки кабеля, ведомость материалов, смета )</td>
                        <td>100 м2</td>
                        <td>400</td>
                        <td></td>
                    </tr>
                    <tr>

                        <td>Проект системы автополива (схема системы автополива, ведомость материалов, смета )</td>
                        <td>100 м2</td>
                        <td>от 800</td>
                        <td>(от 12 000 руб.)</td>
                    </tr>
                    <tr>

                        <td>Детальная схема разбивки цветников, альпийских горок, рокариев</td>
                        <td>шт.</td>
                        <td>3 000</td>
                        <td></td>
                    </tr>
                    <tr>

                        <td>Проект декоративного водоема (план водоема, ведомость материалов, смета )</td>
                        <td>Комплект</td>
                        <td>от 8 000</td>
                        <td></td>
                    </tr>
                    <tr>

                        <td>Проект малых архитектурных форм
                            (беседка, мостики, перголы, скамейки, садовые камины, барбекю, и т.д.)
                        </td>
                        <td>шт.</td>
                        <td>от 8 000</td>
                        <td>Зависит от конструкции</td>
                    </tr>
                    <tr>

                        <td>Проектирование спортивных площадок</td>
                        <td>Комплект</td>
                        <td>Договорная</td>
                        <td>По согласованию</td>
                    </tr>


                    </tbody>
                </table>


            </div>

            <div class="col-md-3 col-lg-3 col-sm-2 col-xs-2" style=" overflow: hidden">
                <img class="price_img" src="/img/project_index.jpg" style="height:650px;">
            </div>
        </div>
    </div>
</div>



<div class="additional_block " style="  background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/img/project_index.jpg) no-repeat center fixed;
    background-size: cover;">
    <div class="container">
        <p class="additional_p"style="margin-bottom: 70px"><i>
                Об основных видах работ по воплощению проекта Вы можете посмотреть
                на страницах <a href="<?= Url::to(['services/blag'])?>" class="main_link"> Благоустройство</a> и <a href="<?= Url::to(['services/ozelen'])?>"
                                                                                                        class="main_link">Озеленение</a>
            </i></p>

            <button class="purple_button signup"><img src="/img/proj_button.png">Оставить заявку</button>
                 <a href="<?= Url::to(['price/project'])?>">
                    <button class="purple_button"><img src="/img/price_button.png">Прайс-лист</button>
                </a>
<!--        <button class="green_button_solid signup" style="width:226px; margin-right: 15px; margin-top: 10px; background-color:#3ca630">-->
<!--            Заказать проект-->
<!--        </button>-->
    </div>
</div>