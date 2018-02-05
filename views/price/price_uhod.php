<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\app;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
$this->title = 'Цена ухода за садом: прайс-лист со стоимостью комплексного ухода';



$this->params['breadcrumbs'][] = ['label' => 'Сервисное обслуживание', 'url' => ['/services/uhod']];
// $this->params['breadcrumbs'][] = Yii::$app->controller->substr_content($this->title, '90');
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="price_div">
    <div class="container ">

        <div class="row">
            <div class="col-md-offset-2 col-lg-offset-2 col-md-8 col-lg-8 col-sm-12 col-xs-12 orange_block">
                <p style="margin-bottom: 30px; font-size: 38px;">АКЦИИ</p>

                <blockquote class="sales">
                    <p>При заключении договора на реализацию работ по благоустройству участка <span class="orange_bold">50%</span> стоимости проекта возвращается.</p>
                </blockquote>
            </div>
        </div>
    </div>

    <div class="container">
        <h1 style="margin-bottom: 30px; margin-top: 40px;">Цены на уход за садом</h1>

        <!--<hr width="600" size="1" color="#d3d3d3" align="left">-->
        <div class="row">

            <div class="col-md-3 col-lg-3 col-sm-1 col-xs-1" style="overflow: hidden">
                <img class="price_img" src="/img/banner_can.jpg" style="    height: 700px;    position: relative; left: -236%;">
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
                        <td><span class="subtitle">Комплексный (ежемесячный) уход за участком</span> <br>Газон, цветники, деревья и кустарники (стрижка, прочесывание, аэрация газонов, прополка и подкормка газонов, цветников, кустарников, стрижка живых изгородей, санитарная обрезка деревьев и кустарников, уборка опавшей листвы и хвои), 4 раза в месяц, бригада из 3-х рабочих</td>
                        <td>2500</td>
                        <td>46000</td>
                        <td>С мая по октябрь</td>
                    </tr>
                    <tr>
                        <td class="subtitle">Разовый уход за участком (бригада из 3 рабочих)</td>
                        <td>участок</td>
                        <td>18000</td>
                        <td>С июня</td>
                    </tr>
                    <tr>
                        <td><span class="subtitle">Разовый уход за газоном и посадками</span> <br>Весной и осенью. Для подготовки к зиме и выведения сада из зимы</td>
                        <td>участок</td>
                        <td>24000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="4" class="subtitle">Газон</td>
                    </tr>
                    <tr>
                        <td>Разовый комплексный уход за газоном весной или осенью (стрижка, подкормка, прокалывание, прочесывание, уборка листвы и мусора, землевание)</td>
                        <td>100 м2</td>
                        <td>от 2000</td>
                        <td>В зависимости от состояния</td>
                    </tr>
                    <tr>
                        <td>Разовый комплексный уход за газоном летом (стрижка, прополка, подкормка)</td>
                        <td>100 м2</td>
                        <td>от 1900</td>
                        <td>В зависимости от состояния</td>
                    </tr>
                    <tr>
                        <td>Только стрижка газона</td>
                        <td>100 м2</td>
                        <td>600</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Обработка (отбивка края газона)</td>
                        <td>м.п.</td>
                        <td>80</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Ремонт газона</td>
                        <td>м2</td>
                        <td>200</td>
                        <td></td>
                    </tr>
                </table>

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
                        <td colspan="4" class="subtitle">Деревья и кустарники</td>
                    </tr>
                    <tr>
                        <td>Разовый комплексный уход за кустарниками - отдельными, в группах, в живых изгородях высотой до 2 м (прополка, подкормка, санит. и формовочная обрезка, полив)</td>
                        <td>м2</td>
                        <td>от 450</td>
                        <td>В зависимости от состояния</td>
                    </tr>
                    <tr>
                        <td>Формовочная стрижка кустарников в живых изгородях</td>
                        <td>м2</td>
                        <td>от 400</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Формовочная обрезка кустарников</td>
                        <td>м2</td>
                        <td>от 300</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Формовочная обрезка деревьев</td>
                        <td>шт.</td>
                        <td>от 1500</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Санитарная и омолаживающая обрезка деревьев</td>
                        <td>шт.</td>
                        <td>от 900</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Диагностика и лечение деревьев</td>
                        <td>шт.</td>
                        <td>договорная</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Укрытие на зиму древесных растений</td>
                        <td>шт.</td>
                        <td>от 500</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="4" class="subtitle">Цветники</td>
                    </tr>
                    <tr>
                        <td>Разовый комплексный уход за цветниками (прополка, рыхление, подкормка минеральными удобрениями, обрезка отцветших соцветий и отмершей листвы, мульчирование, полив и промывка)</td>
                        <td>м2</td>
                        <td>от 500</td>
                        <td>В зависимости от состояния</td>
                    </tr>
                    <tr>
                        <td>Укрытие на зиму многолетних растений</td>
                        <td>м2</td>
                        <td>300</td>
                        <td></td>
                    </tr>
                </table>

                </tbody>
                </table>


            </div>

             <div class="col-md-3 col-lg-3 col-sm-2 col-xs-2" style=" overflow: hidden">
                <img class="price_img" src="/img/blag_introduct.jpg" style="height:600px; position:relative; left:-80%;">
            </div>
        </div>
    </div>
</div>



<div class="additional_block" style=" background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(/img/blag_introduct.jpg) no-repeat center fixed;
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

                <a href="<?=Url::toRoute(['/site/download', 'id' => 'price_uhod.doc'])?>">
                    <button class="purple_button"><img src="/img/download_arrow_2.png"> Прайс-лист</button>
                </a>
<!--                <a href="--><?//= Yii::$app->urlManager->createUrl('/site/download', array('id' => $model->id))?><!--">Скачать</a>-->
<!--                <a href="--><?//= Yii::$app->urlManager->createUrl('/site/download', array('price_project.doc' => $model->id))?><!--">Скачать</a>-->
<!--                <button class="purple_button" style="background-color:  #3ca630">Прайс-лист</button>-->
            </div>
        </div>
    </div>
</div>