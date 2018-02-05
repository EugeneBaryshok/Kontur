<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
$this->title = 'Продажа натурального камня в СПб: песчаник, известняк, доломит, брусчатка, шунгит, златолит';

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
                    В нашем магазине-складе на <span class="green_bold">пр. Кузнецова в СПб</span> вы можете купить натуральный камень на выбор из имеющегося в наличии или под заказ.
                    Продажа камня осуществляется как <span class="green_bold">оптом</span>, так и в <span class="green_bold">розницу</span> для любых дизайнерских и
                    строительных нужд.
                </p>
                <p>
                    <span class="green_bold">Песчаник, доломит, шунгит, известняк,
                        златолит</span> и пр. породы украсят ваш участок, придав ему первозданный естественный вид с помощью "рваного края" и
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
                    <img src="/img/stones/peschanik.jpg" alt="img02"  style="height:230px"/>
                    <figcaption>
                        <h2>Песчаник</h2>
                        <p>от 300 руб./м2</p>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
                <figure class="effect-sadie">
                    <img src="/img/stones/izvest.jpg" alt="img14" style="height:230px"/>
                    <figcaption>
                        <h2>Известняк</h2>
                        <p> от 400 руб./м2</p>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
                <figure class="effect-sadie">
                    <img src="/img/stones/dolomit.jpg" alt="img14"  style="height:230px"/>
                    <figcaption>
                        <h2>Доломит</h2>
                        <p>от 700 руб./м2</p>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
            </div>
            <div class="grid">
                <figure class="effect-sadie">
                    <img src="/img/stones/bruschatka.jpg" alt="img02" style="height:230px"/>
                    <figcaption>
                        <h2>Брусчатка</h2>
                        <p>от 1700 руб./м2</p>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
                <figure class="effect-sadie">
                    <img src="/img/stones/shungit.jpg" alt="img14"  style="height:230px"/>
                    <figcaption>
                        <h2>Шунгит</h2>
                        <p>от 800 руб./м2</p>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
                <figure class="effect-sadie">
                    <img src="/img/stones/zlatotit.jpg" alt="img14"  style="height:230px"/>
                    <figcaption>
                        <h2>Златолит</h2>
                        <p>от 1300 руб./м2</p>
                        <a href="#">View more</a>
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