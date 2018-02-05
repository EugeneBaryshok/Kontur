<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\app;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
$this->title = 'Цена натурального камня в СПб | Стоимость плиты за квадратный метр (м2)';

$this->params['breadcrumbs'][] = ['label' => 'Природный камень', 'url' => ['/services/stone']];
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
                            <td>ДОЛОМИТ </td>
                            <td>3 - 8 см </td>
                            <td>700</td>
                            <td>  </td>
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

    <div class="additional_block" style=" background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(/img/stone_main_new.jpg) no-repeat center fixed;
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

                <a href="<?=Url::toRoute(['/site/download', 'id' => 'price_stone.xls'])?>">
                    <button class="purple_button"><img src="/img/download_arrow_2.png"> Прайс-лист</button>
                </a>
<!--                <a href="--><?//= Yii::$app->urlManager->createUrl('/site/download', array('id' => $model->id))?><!--">Скачать</a>-->
<!--                <a href="--><?//= Yii::$app->urlManager->createUrl('/site/download', array('price_project.doc' => $model->id))?><!--">Скачать</a>-->
<!--                <button class="purple_button" style="background-color:  #3ca630">Прайс-лист</button>-->
            </div>
        </div>
    </div>
</div>
