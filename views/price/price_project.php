<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\app;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\ActiveForm;

$this->title = 'Цена ландшафтного проектирования в СПб | Узнать стоимость проектирования участка';


$this->params['breadcrumbs'][] = ['label' => 'Проектирование', 'url' => ['/services/project']];
// $this->params['breadcrumbs'][] = Yii::$app->controller->substr_content($this->title, '90');
$this->params['breadcrumbs'][] = $this->title;
?>
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


<div class="additional_block" style=" background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(/img/project_index.jpg) no-repeat center fixed;
    background-size: cover;">
    <div class="container" style="text-align: center">
        <div class="row">

            <div class="col-md-12 ">
                <p class="additional_p">
                    После строительных мероприятий проводится <?= Html::a('озеленение', ['services/ozelen'], ['class' => 'main_link']) ?>
                        </a>. Посадка крупномерных деревьев,
                    устройство газонов и подготовка посадочных ям происходит параллельно работам по благоустройству.
                </p>
            </div>
            <div class="col-md-12" style="text-align: center;margin-top: 60px">
<!--                --><?//= Html::a('action', ['site/download', ['price_project.doc' => $id]], ['class' => 'btn btn-default']) ?>

                <a href="<?=Url::toRoute(['/site/download', 'id' => 'price_project.doc'])?>">
                    <button class="purple_button"><img src="/img/download_arrow_2.png"> Прайс-лист</button>
                </a>
<!--                <a href="--><?//= Yii::$app->urlManager->createUrl('/site/download', array('id' => $model->id))?><!--">Скачать</a>-->
<!--                <a href="--><?//= Yii::$app->urlManager->createUrl('/site/download', array('price_project.doc' => $model->id))?><!--">Скачать</a>-->
<!--                <button class="purple_button" style="background-color:  #3ca630">Прайс-лист</button>-->
            </div>

        </div>
    </div>
</div>

<!--<script src="/footable.min.js"></script>-->
<script>

</script>