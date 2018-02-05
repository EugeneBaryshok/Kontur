<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

$this->title = 'Посадка деревьев';


$this->params['breadcrumbs'][] = ['label' => 'Озеленение', 'url' => ['/services/ozelen']];
// $this->params['breadcrumbs'][] = Yii::$app->controller->substr_content($this->title, '90');
$this->params['breadcrumbs'][] = $this->title;
?>



<div class="introduction">
    <div class="container">
        <h1 style="margin-bottom: 40px">Посадка<span class="green"> деревьев и кустарников</span></h1>
		  <hr class="hr" align="left">
        <div class="row">
            <div class="col-md-5 col-lg-5" style="overflow: hidden;">

                <img src="/img/plant_tree.jpg" height="470">
            </div>
            <div class=" col-md-offset-1 col-lg-offset-1 col-md-6 col-lg-6"
                 style="padding-left: 30px; margin-top:0px;">
                <p style="font-size:18px;">
                    О деревьях и кустарниках можно сказать очень много.
                    Например, организованная посадка этих растений согласно плану,
                    наравне с архитектурными элементами, создает дизайн сада.
                    Еще они очищают воздух от углекислого газа, создают прохладную тень во время жары,
                    укрепляют почву корнями.

                </p>
                <p style="font-size:18px;">
                    Кроме этого, посадка кустарников и деревьев просто необходима, иначе без них сад будет смотреться "голым"
                    и неестественным, потому, что по сути это будет уже не сад, а поле или луг. К счастью, многообразие этой
                    формы жизни поистине огромно, что позволяет создать любой ландшафтный дизайн.
                </p>
<button class="purple_button signup"><img src="/img/proj_button.png">Оставить заявку</button>
                 <a href="<?= Url::to(['price/ozelen'])?>">
                    <button class="purple_button"><img src="/img/price_button.png">Прайс-лист</button>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="main_block">
    <div class="container">

<h2>  Виды<span class="green"> деревьев и кустарников</span></h2>
        <hr class="hr" align="left">
        <div class="row">


            <div class="col-md-8 col-lg-8 main_div_left">
                <p>
                    Какие же бывают деревья и кустарники? Можно выделить две основные группы деревьев – это <span class="green_bold">хвойные</span>  и
                    <span class="green_bold">лиственные</span>. Из первой группы чаще всего для посадки на участке используют различные виды елей, сосны,
                    можжевельники, туи, кипарисовики, пихты, кедры, тсуги. Это те деревья, листья которых представляют
                    собой хвою.

                </p>
                <p>
                    Также данные растения можно условно разделить на <span class="green_bold">листопадные и вечно зелёные</span>. Например, к листопадным
                    относятся такие деревья, как клён, берёза, рябина, то есть виды, которые на зиму сбрасывают листву.
                    Однако, бывают и вечнозелёные деревья и кустарники, посадка которых позволяет участку быть "зимой и
                    летом одним цветом". Это такие растения, как магония падуболистная, падуб, некоторые виды рододендронов.


                </p>
                <p>
                    Деревья, как правило, являются декоративно <span class="green_bold">лиственными растениями</span>, а вот кустарники можно
                    разделить на <span class="green_bold">декоративно-лиственные</span>, то есть те, чья декоративная ценность состоит в красивых
                    листьях, и <span class="green_bold">красиво-цветущие</span>. Посадка кустарников последнего типа осуществляется практически только
                    ради красивого цветения. Яркими примерами здесь могут служить сирень или розы.

                </p>
                <p>

                    В целом, посадки деревьев и кустарников наравне с цветниками используются для <span class="green_bold">декоративных</span>
                    или <span class="green_bold">функциональных целей</span>. К примеру – куст плетистой розы на шпалере служит просто украшением сада,
                    а живая изгородь из туй вокруг хозяйственной зоны сада практично скрывает её.

                </p>


            </div>
            <div class="col-md-4 col-lg-4" style="overflow: hidden">
                <img src="/img/elka.jpg" width="800px">
            </div>
        </div>
    </div>
</div>

<div class="banner">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-5 col-md-6 col-sm-12">
                <p style="" class="cursive_text post">
                    Помните, продуманная посадка кустарников и деревьев на участке, выполненная согласно плану озеленения,
                    преобразит и украсит его.
                    Кроме того, ваш сад наполнится свежим воздухом, ароматами цветов и листьев.

                </p>
            </div>
        </div>
    </div>
</div>

<div class="main_block gray_block">
    <div class="container">

        <h2> <span class="green"> Правила посадки</span> деревьев и кустарников</h2>
        <hr class="hr" align="left">
        <div class="row">
            <div class="col-md-4 col-lg-4" style="overflow: hidden">

                <img src="/img/rules_plant.jpg" width="800px">
            </div>
            <div class="col-md-8 col-lg-8 main_div_right">

                <p style="font-size: 20px">
                    Во время работ следует помнить о следующих правилах:
                </p>
                <ul class="dot" id="main_ul" style="margin-bottom:100px ">

                    <li><span style="color:black">Заблаговременное <span class="green_bold">планирование и принятие
                        решения</span> об использовании тех или иных видов деревянистых
                    растений и вариантов их посадки (солитерная, групповые посадки или живые изгороди) в соответствии с
                    общим ландшафтным дизайном участка.</span></li>

                    <li><span style="color:black"><span class="green_bold">Подбор ассортимента</span> следует исходя из особенностей выращивания тех или иных пород в наших условиях.
                    То есть если вы хотите посадить розарий или рокарий, в котором будут расти кипарисовики нужно помнить,
                    что и розы и кипарисовики в условиях Северо-запада требуют укрытия на зиму. И если вы не хотите укрывать
                    на зиму растения в саду, то лучше сразу выбрать те породы, которые переносят зимовку без укрытия.</span></li>

                    <li><span style="color:black">При посадке деревьев и кустарников рядом очень важно знать о том,
                        <span class="green_bold">каких условий они требуют</span>.
                    Например, будет удачным сочетанием, если рядом с хвойниками разместить магонию падуболистную – так
                    как и хвойники и магония предпочитают кислую почву. А вот посадить рядом с хвойниками форзицию – не
                    очень хорошая идея, так как форзиция предпочитает плодородную некислую почву и будет плохо расти рядом
                    с хвойным деревом, которое закисляет почву.</span></li>
                </ul>

            </div>

        </div>
    </div>
</div>


<div class="additional_block " style="  background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/img/ozelen_main_new.jpg) no-repeat center fixed;
    background-size: cover;
   ">
    <div class="container">
        <p class="additional_p" style="margin-bottom: 30px">
      
                    Компания <span class="text_logo">KOHTYP</span> оказывает широкий спектр услуг в области озеленения участка, в том числе посадки деревьев и кустарников.
                    Воспользуйтесь нашими услугами и мы превратим ваш сад в цветущий оазис.
                    <br/>
                    Цены на работы вы можете посмотреть в прайс-листе.

                </p>
                     <button class="purple_button signup"><img src="/img/proj_button.png">Оставить заявку</button>
              <a href="<?= Url::to(['price/ozelen'])?>">
            <button class="purple_button"><img src="/img/price_button.png">Прайс-лист</button>
        </a>
    </div>
</div>

