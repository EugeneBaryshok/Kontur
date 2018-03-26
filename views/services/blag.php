<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
$this->title = 'Благоустройство территории дома в СПб | Работы по благоустройству придомовой территории';

?>

<style>
    .header {
        background:linear-gradient(to top, rgba(255,255,255,0.7), rgba(255, 255, 255, 1)), url(/img/blag_main_new.jpg) no-repeat center fixed;
        background-size:cover;
    }
</style>

<div class="proekt_top" style=" background: url(/img/blag_main_new.jpg) no-repeat  center fixed; background-size: cover;">
    <div class="top_bg">
    </div>
    <div class="jumbotron jumbotron-pages">
        <div class="container" style="text-align: left">
            <div class="col-md-5 col-lg-5   " style="background-color: rgba(0,0,0,0.6)">
                <h1>Благоустройство территории дома</h1>
                <p>Если ваш дачный участок
                    похож скорее на дикий пустырь,
                    то работы по благоустройству территории — то, что решит проблемы.</p>
                <!--<button>Взглянуть</button>-->
            </div>
        </div>
    </div>
</div>

<div class="introduction" style="padding-top: 70px">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12" style="overflow: hidden;">

                <img src="/img/blag_main_tab.jpg" width="100%">
            </div>
            <div class=" col-md-offset-1 col-lg-offset-1 col-md-6 col-lg-6 col-sm-12 col-xs-12"
                 style="padding-left: 30px; margin-top:20px;">
                <p style="margin-bottom: 30px"> Благоустройство территории - это комплекс работ по изменению окружающего пейзажа, городского или загородно участка в соответствии с эксплуатационными,
                    экологическими и эстетическими требованиями.
                    Компания <span class="text_logo" style="font-size: 16px; line-height: 16px;">KOHTYP</span> выполняет все виды работ по благоустройству территории
                    различных объектов.

                </p>

                <button class="purple_button signup"><img src="/img/proj_button.png">Оставить заявку</button>
                <a href="<?= Url::to(['price/blag'])?>">
                    <button class="purple_button"><img src="/img/price_button.png">Прайс-лист</button>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="ozelen_1">
    <div class="container">

        <h3 class="h3_main" style="text-align: center;margin-bottom:40px">Основные виды работ по благоустройству <br>ландшафтных объектов:</h3>

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

                    <li><span style="color:black"> Выкорчевывание пней, валка больных и старых деревьев,
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

                    <li><span style="color:black"> Сооружение подземной системы отвода ливневой и талой воды с твердых покрытий;</span>
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
                    <img src="/img/blag_img/plosk_2.png">
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <ul class="dot">
                    <li><span style="color:black"> Устройство на территории пешеходных дорожек, проездов с разными видами покрытий
                    (тротуарная плитка, щебенка, природный камень, дерево)</span></li>

                    <li><span
                                style="color:black"> Строительство спортивных и детских площадок на различной основе</span>
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
                    <li><span style="color:black"> Работы по укреплению откосов</span></li>

                    <li><span
                                style="color:black"> Строительство подпорных стенок</span>
                    </li>

                    <li><span style="color:black"> Облицовка вертикальных поверхностей</span></li>
                    <li><span style="color:black"> Строительство пандусов и лестниц</span></li>
                </ul>

                <!--<button class="purple_button" style="margin-right: 40px">Прайс-лист</button>-->

            </div>
            <div class="col-md-6 col-lg-6" style="">
                <div class="circle">
                    <img src="/img/blag_img/blag_3.jpg">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blag_banner">
    <div class="container">
        <p class="cursive_text post">
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
                    <img src="/img/blag_img/services_7.jpg">
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <ul class="dot">
                    <li><span style="color:black"> Строительство водопадов, каналов, бассейнов, каскадов, ручьев;</span>
                    </li>

                    <li><span style="color:black"> Работы по устройству водоемов из пластиковых форм и пленочного материала;</span>
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
                    <li> Строительство мостиков, беседок, навесов, пергол, трельяжей;</li>
                    <li> Сооружение каминов;</li>
                    <li> Работы по установке на территории цветочниц, садовой скульптуры, декоративных природных камней, скамеек, урн и пр.;</li>
                    <li> Монтаж оборудования детских и спортивных площадок;</li>
                    <li> Монтаж декоративных осветительных приборов.</li>
                </ul>

                <!--<button class="purple_button" style="margin-right: 40px">Прайс-лист</button>-->

            </div>
            <div class="col-md-6 col-lg-6" style="">
                <div class="circle">
                    <img src="/img/blag_img/services_8.jpg">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Цены пошли ..-->

 <div class="container">
 
 <div class="container" style="margin-top:30px;">
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
 
 
  <h1 style="margin-bottom: 30px; margin-top: 40px;">Цены на благоустройство территории</h1>
        <!--<hr width="600" size="1" color="#d3d3d3" align="left">-->
        <div class="row">
		
		<div class="col-md-3 col-lg-3 col-sm-1 col-xs-1" style="overflow: hidden">
                <img class="price_img" src="/img/blag_main_new.jpg" style="height:880px; position:relative; left:-300%;">
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
                        <td class="subtitle">Подготовительные работы</td>
                    </tr>
                    <tr>
                        <td>Очистка территории от мусора</td>
                        <td>100 м2</td>
                        <td>от 1000</td>
                        <td>В зависимости от количества</td>
                    </tr>
                    <tr>
                        <td>Очистка леса от подроста (деревья и кустарники с D< 5см)</td>
                        <td>м2</td>
                        <td>от 30</td>
                        <td>В зависимости от плотности</td>
                    </tr>
                    <tr>

                        <td>Корчевка и удаление пней</td>
                        <td>шт.</td>
                        <td>40 за D=1см</td>

                    </tr>
                    <tr>

                        <td>Валка деревьев целиком</td>
                        <td>шт.</td>
                        <td>от 2500</td>
                        <td>От породы, диаметра, высоты</td>
                    </tr>
                    <tr>

                        <td>Валка деревьев по частям</td>
                        <td>шт.</td>
                        <td>от 3500</td>
                        <td>От породы, диаметра, высоты</td>
                    </tr>
                    <tr>

                        <td>Кронирование и санитарная обрезка деревьев</td>
                        <td>шт.</td>
                        <td>Договорная</td>

                    </tr>
                    <tr>

                        <td>Вывоз мусора (в т.ч. погрузка)</td>
                        <td>м3</td>
                        <td>700</td>

                    </tr>
                    <tr>

                        <td>Планировка участка</td>
                        <td>м2</td>
                        <td>30</td>

                    </tr>
                    <tr>

                        <td>Перемещение сыпучих вручную далее 30 м</td>
                        <td>м3</td>
                        <td>400</td>

                    </tr>
                    <tr>
                        <td  class="subtitle">Работы по осушению и отводу воды</td>
                    </tr>
                    <tr>
                        <td>Устройство закрытого дренажа</td>
                        <td>м.п.</td>
                        <td>от 480</td>
                        <td>В зависимости от глубины и сложности работ</td>
                    </tr>
                    <tr>

                        <td>Устройство открытой дренажной канавы</td>
                        <td>м.п.</td>
                        <td>от 320</td>
                        <td>В зависимости от глубины</td>
                    </tr>
                    <tr>

                        <td>Устройство дренажного колодца (глубиной до 2м)</td>
                        <td>шт.</td>
                        <td>от 4000</td>
                        <td>В зависимости от конструкции и глубины</td>
                    </tr>
                    <tr>

                        <td>Устройство подземной системы водоотвода</td>
                        <td>м.п.</td>
                        <td>от 350</td>

                    </tr>
                    <tr>

                        <td>Установка водоприемных каналов с решеткой</td>
                        <td>м.п.</td>
                        <td>от 500</td>
                        <td>В зависимости от размеров канала</td>
                    </tr>
                    <tr>

                        <td>Установка водоотводных лотков</td>
                        <td>м.п.</td>
                        <td>от 300</td>

                    </tr>
                    <tr>

                        <td>Установка водоприемников</td>
                        <td>шт.</td>
                        <td>от 400</td>

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<a name="mos">&nbsp;</a>
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
                        <td colspan="4" class="subtitle">Устройство плоскостных сооружений</td>
                    </tr>
                    <tr>
                        <td>Мощение тротуарной плиткой с устройством основания (пешеходное)</td>
                        <td>м2</td>
                        <td style="min-width: 100px">от 800</td>
                        <td>При наличии рис. К = 1,3</td>
                    </tr>

                    <tr>
                        <td>Мощение тротуарной плиткой с устройством основания (автомобильное)</td>
                        <td>м2</td>
                        <td>от 900</td>
                        <td>При наличии рис. К = 1,3</td>
                    </tr>
                    <tr>

                        <td>Устройство щебеночно-набивных покрытий с устройством основания</td>
                        <td>м2</td>
                        <td>400</td>
                        <td></td>
                    </tr>
                    <tr>

                        <td>Мощение природным камнем (булыжник, гранитная брусчатка) с устройством основания</td>
                        <td>м2</td>
                        <td>от 1400</td>
                        <td>В зависимости от конструкции и назначения</td>
                    </tr>
                    <tr>

                        <td>Мощение деревянными спилами (пешеходное) с устройством основания</td>
                        <td>м2</td>
                        <td>от 900</td>

                    </tr>
                    <tr>

                        <td>Устройство пешеходных покрытий из плоского природного камня с устройством основания
                            (песчаник, известняк, доломит, гранит и т.п.)
                        </td>
                        <td>м2</td>
                        <td>от 1000</td>
                        <td>В зависимости от материала и конструкции</td>
                    </tr>
                    <tr>

                        <td>Устройство бетонных покрытий (толщиной 100мм) с устройством основания</td>
                        <td>м2</td>
                        <td>450</td>

                    </tr>
                    <tr>

                        <td>Установка бордюрного камня (пешеходного поребрика 100(50)х20х8 см)</td>
                        <td>м.п.</td>
                        <td>390</td>

                    </tr>
                    <tr>

                        <td>Установка бордюрного камня (автомобильного бордюра 100х30х15 см)</td>
                        <td>м.п.</td>
                        <td>580</td>

                    </tr>
                    </tbody>
                </table>


            </div>

           
            <div class="col-md-3 col-lg-3 col-sm-2 col-xs-2" style=" overflow: hidden">
                <img class="price_img" src="/img/stones_2.jpg" style="height:700px;">
            </div>
        </div>
    </div>
</div>

<div class="price_div">
    <div class="container">
  
        <!--<hr width="600" size="1" color="#d3d3d3" align="left">-->
        <div class="row">
		
		<div class="col-md-3 col-lg-3 col-sm-1 col-xs-1" style="overflow: hidden">
                <img class="price_img" src="/img/garden-path.jpg" style="height:100%;">
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
                        <td colspan="4" class="subtitle">Инженерные сооружения</td>
                    </tr>
                    <tr>
                        <td><b>Лестницы:</b></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td> - устройство ступеней из тротуарной плитки</td>
                        <td>м.п.</td>
                        <td>1000</td>
                        <td></td>
                    </tr>
                    <tr>

                        <td> - устройство ступеней из других материалов</td>
                        <td>м2</td>
                        <td>от 1200</td>
                        <td>В зависимости от материалов</td>

                    </tr>
                    <tr>

                        <td> - устройство пандусов и ступопандусов</td>
                        <td>м2</td>
                        <td>от 800</td>
                        <td>В зависимости от конструкции и материалов</td>
                    </tr>
                    <tr>
                        <td><b>Работы по укреплению откосов:</b></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>

                        <td> - георешеткой</td>
                        <td>м2</td>
                        <td>от 350</td>
                        <td>В зависимости от крутизны и толщины</td>
                    </tr>
                    <tr>

                        <td> - бетонной газонной решеткой</td>
                        <td>м2</td>
			<td>от 450</td>
                        <td>В зависимости от крутизны и материалов</td>

                    </tr>
                    <tr>

                        <td> - габионными конструкциями</td>
                        <td>м2</td>
                        <td>Договорная</td>
                        <td>По проекту</td>

                    </tr>
                    <tr>
                        <td><b>Устройство подпорных стенок:</b></td>
                    </tr>
                    <tr>

                        <td> - из плоского природного камня (известняк, доломит, песчаник и т.п.) высотой до 0,5 м</td>
                        <td>м3</td>
                        <td>от 4000</td>
                        <td>В 1 м3 ~ 7 м.п.</td>

                    </tr>
                    <tr>
                        <td> - из плоского природного камня на раствор, высота 0,5 – 1 м</td>
                        <td>м3</td>
                        <td>от 4600</td>
                        <td>В 1 м3 ~ 3,5 м.п.</td>
                    </tr>
                    <tr>

                        <td> - из объемного природного камня (валун, гранит и др.)</td>
                        <td>м3</td>
                        <td>от 4500</td>
                        <td>В зависимости от высоты</td>
                    </tr>
                    <tr>

                        <td> - из бетонных блоков</td>
                        <td>м3</td>
                        <td>от 4000</td>
                        <td>В зависимости от высоты</td>
                    </tr>
                    <tr>

                        <td> - из круглого бревна D = 12 – 18 см</td>
                        <td>м.п.</td>
                        <td>от 3000</td>
                        <td>В зависимости от диаметра бревна</td>

                    </tr>
                    <tr>

                        <td> - из бетона высотой до 1м</td>
                        <td>м3</td>
                        <td>от 4800/5500</td>
                        <td>В зависимости от высоты и конструкции</td>
                    </tr>
                    <tr>

                        <td><b>Облицовка вертикальных поверхностей:</b></td>
                    </tr>
                    <tr>

                        <td> - не окантованным «рванина» плоским природным камнем (известняк, песчаник, гранит и т.п.)
                        </td>
                        <td>м2</td>
                        <td>от 1250</td>
                        <td>В зависимости от высоты</td>

                    </tr>
                    <tr>

                        <td> - мерным пиленым «скоба» (4-х, 5-и, 6-и –сторонней окантовкой) природным и
                            искусственным(бетон) камнем
                        </td>
                        <td>м2</td>
                        <td>от 1500</td>
                        <td>В зависимости от высоты</td>

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
                        <td colspan="4" class="subtitle">Водные сооружения</td>
                    </tr>

                    <tr>
                        <td><b>Устройство водоема:</b></td>
                    </tr>
                    <tr>
                        <td>- установка пластиковых форм </td>
                        <td>м2</td>
                        <td>2000</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>- устройство декоративного пленочного водоема с оформлением камнем берегов, линии шириной до 0,8м </td>
                        <td>м2</td>
                        <td>от 3500</td>
                        <td>В зависимости от глубины</td>
                    </tr>
                    <tr>
                        <td>- устройство декоративного пленочного водоема с оформлением камнем всей площади</td>
                        <td>м2</td>
                        <td>от 5000</td>
                        <td>В зависимости от глубины и материалов</td>
                    </tr>
                    <tr>
                        <td>- устройство водоема в естественном грунте</td>
                        <td>м2</td>
                        <td>от 1700</td>
                        <td>В зависимости от грунтов</td>
                    </tr>
                    <tr>
                        <td>Устройство ручья шириной 0,5 м</td>
                        <td>м.п.</td>
                        <td>от 2500</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Устройство каскада</td>
                        <td>шт.</td>
                        <td>Договорная</td>
                        <td>По индивидуальному проекту</td>
                    </tr>
                    <tr>
                        <td>Оформление дна, откосов природным камнем</td>
                        <td>м2</td>
                        <td>от 850</td>
                        <td>В зависимости от глубины и материалов</td>
                    </tr>
                    <tr>
                        <td>Оформление прибрежных линий декоративными материалами (камень, галька, песок)</td>
                        <td>м2</td>
                        <td>от 380</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="4" class="subtitle">Малые архитектурные формы</td>
                    </tr>
                    <tr>
                        <td>Устройство шестигранной деревянной беседки D = 3 м</td>
                        <td>шт.</td>
                        <td>Договорная</td>
                        <td>В зависимости от конструкции и материалов</td>
                    </tr>
                    <tr>
                        <td>Установка деревянного мостика L=2 м на бетонном основании</td>
                        <td>шт.</td>
                        <td>3000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Устройство камина, навеса, декоративной стенки, перголы, трельяжа</td>
                        <td>шт.</td>
                        <td>Договорная</td>
                        <td>По индивидуальному проекту</td>
                    </tr>
                    <tr>
                        <td>Установка цветочниц, скамеек, скульптуры, садовой мебели и т.п.</td>
                        <td>шт.</td>
                        <td>договорная</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Установка спортивного и детского игрового оборудования</td>
                        <td>Комплект</td>
                        <td>Договорная</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Устройство деревянного компостного ящика V = 2 м3</td>
                        <td>шт.</td>
                        <td>от 3000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Устройство деревянных грядок</td>
                        <td>м2</td>
                        <td>от 400</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="4" class="subtitle">Системы декоративного освещения</td>
                    </tr>
                    <tr>
                        <td>Работы по прокладке эл/кабеля</td>
                        <td>м.п.</td>
                        <td>130</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Монтаж светильников высотой до 1,5м с подготовкой основания и подключением к цепи</td>
                        <td>шт.</td>
                        <td>850</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Монтаж светильников высотой более 1,5 м с подготовкой основания и подключением к цепи</td>
                        <td>шт.</td>
                        <td>от 1300</td>
                        <td>В зависимости от высоты и конструкции</td>
                    </tr>
                    <tr>
                        <td>Установка розеток, выключателей</td>
                        <td>шт.</td>
                        <td>150</td>
                        <td></td>
                    </tr>
                    <tr>
                </table>
            </div>

            <div class="col-md-3 col-lg-3 col-sm-12" style="overflow: hidden">
                <!-- <img src="img/bl_price.jpg" style="height:646px"> -->
                <img src="/img/stones4.jpg" style="height:1400px; position:relative; left:-80%;">
            </div>
        </div>
    </div>
</div>
<div class="price_div">
    <div class="container">
  
        <!--<hr width="600" size="1" color="#d3d3d3" align="left">-->
        <div class="row">
		
		<div class="col-md-3 col-lg-3 col-sm-1 col-xs-1" style="overflow: hidden">
                <img class="price_img" src="/img/ladybug.jpg" style="height:900px">
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
                        <td colspan="4" class="subtitle">Системы полива</td>
                    </tr>
                    <tr>
                        <td>Устройство системы полива с ручным управлением</td>
                        <td>м.п.</td>
                        <td>от 400</td>
                        <td>В зависимости от конструкции и материалов</td>
                    </tr>
                    <tr>
                        <td>Устройство автоматических систем полива</td>
                        <td>100 м2</td>
                        <td>от 7000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="4" class="subtitle">Заборы и ограждения (под ключ)</td>
                    </tr>
                    <tr>
                        <td>Устройство сплошного деревянного забора на кирпичных столбах и ленточном бетонном фундаменте высотой - 2м, длина пролета - 2,7м</td>
                        <td>м.п.</td>
                        <td>6480</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>устройство сплошного деревянного забора на бет. блоках «Бастион» и ленточном бетонном фундаменте высотой - 2м, длина пролета - 2,7м</td>
                        <td>м.п.</td>
                        <td>6875</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Устройство сплошного забора из профильного метал. листа на метал. столбах высотой-2м, длина пролета - 2,5м</td>
                        <td>м.п.</td>
                        <td>1975</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Устройство сплошного деревянного забора на металлических столбах высотой - 2м, длина пролета - 2,5м</td>
                        <td>м.п.</td>
                        <td>3515</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Устройство забора из сетки «рабицы» на металлических столбах высотой - 1,5м, длина пролета - 2,5м</td>
                        <td>м.п.</td>
                        <td>945</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Устройство полуоткрытого деревянного забора – штакетника на металлических столбах высотой - 2м</td>
                        <td>м.п.</td>
                        <td>2200</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Устройство малого ограждения из металлических секций высотой до 0,8м</td>
                        <td>м.п.</td>
                        <td>Договорная</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Устройство забора "Геттер" из сварной сетки с полимерным покрытием на металлических столбах</td>
                        <td>м.п.</td>
                        <td>1500</td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- end цены-->



<div class="additional_block " style="  background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/img/blag_main_new.jpg) no-repeat center fixed;
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
                    После строительных мероприятий проводится <a href="<?= Url::to(['services/ozelen'])?>"class="main_link" style="color:white; text-decoration: underline">озеленение</a>: посадка крупномерных деревьев,
                    устройство газонов и подготовка посадочных ям происходит параллельно работам по благоустройству.
                </p>
            </div>
            <div class="col-md-12" style="text-align: center;margin-top: 60px">

                <button class="purple_button signup"><img src="/img/proj_button.png">Оставить заявку</button>
                <a href="<?= Url::to(['price/blag'])?>">
                    <button class="purple_button"><img src="/img/price_button.png">Прайс-лист</button>
                </a>

            </div>
        </div>
    </div>
</div>