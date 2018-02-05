<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

$this->title = '  Устройство цветников';

$this->params['breadcrumbs'][] = ['label' => 'Озеленение', 'url' => ['/services/ozelen']];
// $this->params['breadcrumbs'][] = Yii::$app->controller->substr_content($this->title, '90');
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
.dot li
{
 font-size:18px; 
}
</style>
<div class="introduction">
    <div class="container">
        <h1 style="margin-bottom: 40px">Посадка<span class="green"> цветников</span></h1>
		  <hr class="hr" align="left">
        <div class="row">
            <div class="col-md-5 col-lg-5" style="overflow: hidden;">

                <img src="/img/flowerbeds3.jpg" height="470">
            </div>
            <div class=" col-md-offset-1 col-lg-offset-1 col-md-6 col-lg-6"
                 style="padding-left: 30px; margin-top:0px;">
                <p style="font-size:18px;">
                    Цветник - одно из наиболее ярких украшений сада. При правильном подборе растений он будет радовать вас яркими красками весь сезон.
                    В каждом саду, независимо от его размеров присутствует хотя бы один цветник.Это вполне объяснимо – даже самый крошечный садик выглядит уютным и красивым, если
                    в нём растут цветы.

                </p>
                <p  style="font-size:18px;">К цветникам относятся:</p>
                <ul class="dot" id="main_ul" style="margin-bottom:40px;">

                    <li><span style="color:#959595"> клумбы;</span></li>
                    <li><span style="color:#959595;"> рабатки;</span></li>
                    <li><span style="color:#959595"> солитер;</span></li>
                    <li><span style="color:#959595"> миксбордеры;</span></li>
                    <li><span style="color:#959595"> бордюры;</span></li>
                </ul>

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

	<h2>  Виды<span class="green"> цветников</span></h2>
        <hr class="hr" align="left">

        <div class="row">


            <div class="col-md-8 col-lg-8 main_div_left">
                <p>
                    <span class="green_bold">Клумба</span>,представляет собой замкнутый планировочный элемент, засаженный цветущими растениями.
                    Классическими формами клумбы являются круг и квадрат.

                </p>
                <p>
                    <span class="green_bold">Рабатка</span> – это узкие и длинные цветочные грядки, расположенные по бокам дорожки.
                </p>
                <p>
                    <span class="green_bold">Солитер</span> - одиночные посадки растений, которые выделяются своей оригинальностью и крупными размерами.
                    Такие растения должны быть высокорослыми и иметь крупные красивой форы цветки и орнаментальные листья.

                </p>
                <p>
                    <span class="green_bold">Миксбордером</span>,называется цветник произвольной формы,состоящий из многолетников,летников и декоративно-лиственных кустарников.
                    <span class="green_bold">Бордюр</span>,представляет собой узкие и длинные полоски невысоких цветов, обрамляющие газоны, лужайки, стены.Главным принципом для устройства миксбордера является
                    подборка растений по принципу непрерывности цветения на протяжении периода весна-лето-осень.То есть весной начинают цвести одни растения, затем, когда они отцветают,
                    в стадию цветения вступают другие и так далее. Таким образом, постоянно поддерживается декоративный вид миксбордера.
                </p>

            </div>
            <div class="col-md-4 col-lg-4" style="overflow: hidden">
                <img src="/img/clumba.jpg" width="800px">
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

        <h2> <span class="green"> Правила посадки</span> цветников</h2>
        <hr class="hr" align="left">
        <div class="row">

            <div class="col-md-6 col-lg-6 ">
                <p style="font-size: 20px">
                    При устройстве любого цветника необходимо следовать нескольким правилам:
                </p>
                <ul class="dot" id="main_ul" style="margin-bottom:100px ">

                    <li><span style="color:black">цветник, как и другие ландшафтные элементы в саду,
                            нужно заранее планировать с учётом того, как он впишется в общий дизайн сада.</span></li>

                    <li><span style="color:black">по возможности для цветника нужно выбирать хорошо освещённое место.</span></li>

                    <li><span style="color:black">до посадки декоративных растений необходимо не только разметить место посадки, но и качественно подготовить почву.</span></li>
                    <li><span style="color:black">в зависимости от месторасположения цветника (насколько оно солнечное или наоборот, затенённое) следует подбирать ассортимент растений.</span></li>
                </ul>
            </div>
            <div class="col-md-5 col-lg-5" style="overflow: hidden;">

                <img src="/img/rule_flower.jpg" width="80%">
            </div>
        </div>
            <div class="row">
            <div class="col-md-12 col-lg-12 ">

                <p>
    При устройстве цветников используются, как правило, <span class="green_bold">многолетники с добавлением летников и декоративно-лиственные кустарники</span>. К многолетникам относятся растения,
    сохраняющие свои вегетативные качества в течение нескольких лет, за счёт зимующих корней, корневищ или луковиц. Летниками называют однолетние растения,
    проходящие за 1-2 сезона полный цикл развития – от прорастания из семени, цветения до полного увядания и отмирания наземных и подземных побегов.

</p>
                <p>
                    <span class="green_bold"> Декоративно-лиственными</span> называю кустарники, которые представляют декоративную ценность не за счёт своего цветения, а за счёт необычной красивой листвы.
                    Планировать ассортимент растений для цветника нужно с учётом сочетаемости растений как по агротехнике, так по цветовой гамме.
                    То есть наиболее удачным и менее сложным в уходе будет цветник, состоящий из растений, которые нуждаются примерно в одинаковой освещённости, влажности,
                    плодородности почвы.
                </p>
                <p>
                    С точки зрения <span class="green_bold">гармоничности растений по цветовой гамме</span> нужно исходить из того, какой эффект от цветника вы хотите получить – будет это яркий и динамичный
                    элемент сада или наоборот, спокойный. Таким образом, для динамичного цветника следует подбирать яркие и контрастные растения, преимущественно в тёплых тонах.
                    Чтобы добиться спокойного эффекта необходимо использовать растения, цветущие светлыми и некрупными цветами, а так же декоративно лиственные растения с ажурной
                    листвой.
                </p>
                <p>
                    Задумываясь о цветнике, помните, что цветник является <span class="green_bold">украшением</span> любого сада, однако должен соответствовать единой концепции озеленения приусадебного участка.
                    В любом случае, правильно устроенный цветник долгие годы будет радовать вас красивым цветением.
                </p>
            </div>

        </div>
    </div>
</div>


<div class="additional_block " style="  background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/img/ozelen_main_new.jpg) no-repeat center fixed;
    background-size: cover;
   ">
    <div class="container">
        <p class="additional_p" style="margin-bottom: 30px">
      
                    Компания <span class="text_logo">KOHTYP</span> оказывает широкий спектр услуг в области озеленения участка, в том числе создание цветников.
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


