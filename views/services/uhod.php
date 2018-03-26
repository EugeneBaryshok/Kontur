<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;

$this->title = 'Комплексный уход за садом в СПб | Услуги фирмы "Контур""';

?>
<style>
    .header {
        background:linear-gradient(to top, rgba(255,255,255,0.7), rgba(255, 255, 255, 1)), url(/img/uhod_main_new.jpg) no-repeat center fixed;
        background-size:cover;
    }
</style>

<div class="proekt_top" style=" background: url(/img/uhod_main_new.jpg) no-repeat  fixed;
background-size: cover;
background-position: center">
    <div class="top_bg">

    </div>
    <div class="jumbotron jumbotron-pages">
        <div class="container" style="text-align: left">
            <div class="col-md-5 col-lg-5   " style="background-color: rgba(0,0,0,0.6)">
                <h1>Комплексный уход за садом</h1>
                <p>Мало создать сад, за ним еще требуется постоянный поддерживающий уход</p>
                <!--<button>Взглянуть</button>-->
            </div>
        </div>
    </div>
</div>


<div class="introduction" style="padding-top: 70px">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12" style="overflow: hidden;">

                <img src="/img/uhod_2.jpg" width="100%">
            </div>
            <div class=" col-md-offset-1 col-lg-offset-1 col-md-6 col-lg-6 col-sm-12 col-xs-12"
                 style="padding-left: 30px;">
                <p> Мало создать сад, за ним еще требуется постоянный поддерживающий уход. Стоило тратить большие
                    деньги, чтобы потом все завяло или выглядело, в лучшем случае, не презентабельно.
                    Первое время все посаженные растения требуют к себе повышенного внимания. Особое внимание надо
                    обратить на регулярный обильный полив посаженных растений и газона, а также на стрижку газона.
                    Зимние сады также требуют регулярного ухода, иначе все, что там посажено, проживет недолго.
                </p>

                <button class="purple_button signup"><img src="/img/proj_button.png">Оставить заявку</button>
                <a href="<?= Url::to(['price/uhod'])?>">
                    <button class="purple_button"><img src="/img/price_button.png">Прайс-лист</button>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="ozelen_1">
    <div class="container">


        <h2 style="margin-bottom: 30px;">Уход за <span class="green">газоном</span></h2>
        <hr width="80%" size="1" color="#d3d3d3" align="center">
        <div class="row">

            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12" style="overflow: hidden">
                <img src="/img/blag_img/services_3.jpg" width="100%">
<!--
  <img src="/img/banner_hose.jpg" width="100%">-->
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <ul class="dot" style="margin-bottom:100px ">
                    <li><span style="color:black"> Полив (регулярно),  стрижка (не менее 3 раз в месяц)</span></li>

                    <li><span style="color:black"> Подкормка минеральными удобрениями (не менее 3 раз за сезон)</span>
                    </li>

                    <li><span style="color:black"> Борьба с сорняками (регулярно, по необходимости)</span></li>

                    <li><span style="color:black"> Аэрация (прокалывание) корнеобитаемого слоя почвы (по необходимости, но не менее 1 раза в сезон)</span>
                    </li>

                    <li><span style="color:black"> Землевание или пескование -  подсыпка перегноя, песка или торфа тонким слоем (по необходимости)    </span>
                    </li>
                    <li><span style="color:black"> Прочесывание – уборка отмерших сухих побегов (как правило, весной перед началом периода вегетации)</span>
                    </li>
                    <li><span style="color:black"> Уборка опавшей листвы или хвои (осенью, весной)</span></li>
                    <li><span style="color:black"> Подсев семян газонных трав (в местах проплешин)</span></li>
                    <li><span style="color:black"> Ремонт газона (по необходимости)</span></li>
                </ul>

            </div>
        </div>
    </div>
</div>


<div class="ozelen_1 gray_block">
    <div class="container">

        <h2 style="margin-bottom: 30px;"> Уход за <span class="green">деревьями и кустарниками</span></h2>
        <hr width="80%" size="1" color="#d3d3d3" align="center">
        <div class="row">

            <div class="col-md-6 col-lg-6">


                <ul class="dot" style="">

                    <li><span style="color:black"> Полив молодых саженцев деревьев и кустарников</span></li>

                    <li><span style="color:black"> Подкормка их удобрениями в первые несколько лет</span></li>
                    <li><span style="color:black"> Прополка куртин кустарников и живых изгородей</span></li>
                    <li><span style="color:black"> Мульчирование куртин</span></li>
                    <li><span style="color:black"> Формовочная стрижка кустарников в живых изгородях для плотного разрастания и красоты (осенью, зимой, весной до начала вегетации)</span>
                    </li>

                    <li><span style="color:black"> Санитарная и формовочная обрезка деревьев</span></li>
                    <li><span style="color:black">укрытие на зиму древесных растений (тех, которые этого требуют)</span>
                    </li>

                    <li><span
                                style="color:black"> Укрытие хвойных растений от весенних ожогов (определенные виды)</span>
                    </li>


                </ul>

            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12" style="overflow: hidden">
<!--                <img src="/img/blag_img/services_4.jpg" width="100%">-->
                <img src="/img/banner_tree.jpg" width="100%">
            </div>
        </div>
    </div>
</div>

<div class="ozelen_1">
    <div class="container">


        <h2 style="margin-bottom: 30px;">Уход за <span class="green">цветниками</span></h2>
        <hr width="80%" size="1" color="#d3d3d3" align="center">
        <div class="row">

            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12" style="overflow: hidden">
                <img src="/img/flowers_uhod.jpg" width="100%">
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <ul class="dot" style="margin-bottom:100px ">
                    <li><span style="color:black"> Полив, прополка, рыхление</span></li>

                    <li><span style="color:black"> Подкормка минеральными удобрениями (не менее 3 раз за сезон)</span>
                    </li>

                    <li><span style="color:black"> Подсыпка мульчи</span></li>

                    <li><span style="color:black"> Подкормку минеральными удобрениями</span></li>

                    <li><span style="color:black"> Промывка растений  </span></li>
                    <li><span style="color:black"> Удаление отцветших соцветий и отмершей листвы</span></li>
                    <li><span style="color:black"> Укрытие на зиму многолетних растений</span></li>
                    <li><span style="color:black"> Рассадка излишних побегов</span></li>
                    <li><span style="color:black"> Ремонт</span></li>
                </ul>

            </div>
        </div>
    </div>
</div>

<div class="price_div gray_block">
    
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
        <h2 style="margin-bottom: 30px; margin-top: 40px;">Цены на уход за садом</h2>

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

<div class="price_div">
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



<div class="additional_block " style="  background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/img/uhod_main_new.jpg) no-repeat center fixed;
    background-size: cover;">
    <div class="container" style="text-align: left">
        <div class="row">
            <div class="col-md-9">
                <p class="additional_p" style="margin-bottom: 30px;">
                    Последовательность выполнения представленных выше пунктов может изменяться в зависимости от
                    конкретного случая.
                    Кроме этого, некоторые из них можно проводить одновременно.

                </p>
            </div>
            <div class="col-md-9 col-md-offset-3">
                <p class="additional_p" style="">
                    Постоянный уход за садом - неотъемлемая часть ландшафтного дизайна дачного участка.
                    Если вы хотите, чтобы ваши растения радовали вас как можно дольше, то не жалейте на это времени.
                    Если у вас его нет, то мы готовы его найти у себя!
                </p>
            </div>
            <div class="col-md-12" style="text-align: center;margin-top: 60px">

                <button class="purple_button signup"><img src="/img/proj_button.png">Оставить заявку</button>
                <a href="<?= Url::to(['price/uhod'])?>">
                    <button class="purple_button"><img src="/img/price_button.png">Прайс-лист</button>
                </a>

            </div>
        </div>
    </div>
</div>
