<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\app;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
$this->title = 'Цена озеленения территории | Стоимость озеленения участка за м2 по прайс-листу';
$this->params['breadcrumbs'][] = ['label' => 'Озеленение', 'url' => ['/services/ozelen']];
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



<div class="additional_block" style=" background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(/img/ozelen_main_new.jpg) no-repeat center fixed;
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

                <a href="<?=Url::toRoute(['/site/download', 'id' => 'price_ozelen.doc'])?>">
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