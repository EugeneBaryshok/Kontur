<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;
/* @var $this yii\web\View */

$this->title = 'Ландшафтный дизайн в СПб | Заказать ландшафтный дизайн в Петербурге и Ленобласти (ЛО) по оптимальной цене';
?>
<style>
    .header {
        background:linear-gradient(to top, rgba(255,255,255,0.7), rgba(255, 255, 255, 1)), url(./img/BG_web.jpg) center no-repeat fixed;
        background-size:cover;

    }
.validator
{
display:none;
}

</style>
   
<div class="site-index">
    <div class="top" style=" background: url(./img/BG_web.jpg) no-repeat  center fixed; background-size: cover;">
        <div class="jumbotron">
            <div class="container" style="position:absolute; left:0; width: 100%; bottom: 7%">
                <h1 class="main_slogan" style="color:white; font-family: 'Open Sans Condensed', sans-serif;">Ландшафтный дизайн
                   <!--<span class="index_city"></span>--><br>в Санкт-Петербурге</h1>
                                    <p class="index_slogan" style=""><i>15 лет на рынке ландшафтных услуг</i></p>

            </div>
            <a href="#link">
                <img class="mp-main_arrow" src="./img/arrow.png">
            </a>

            
        </div>
    </div>
<!--    <div class="top">-->
<!--        <div class="jumbotron">-->
<!--            <div class="container">-->
<!--                <h2 class="main_slogan"> Мы те кого вы ищете </h2>-->
<!--                <p><i>Жить в красоте и удобстве проще, чем кажется!</i></p>-->
<!--                <!--<button>Взглянуть</button>-->
<!--                <a href="#link">-->
<!--                    <img class="mp-main_arrow" src="./img/arrow.png">-->
<!--                </a>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->


    <div class="nav-images">
        <a name="link"></a>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-container" id="img_cont_proj" >
                        <a href="<?= Url::to(['services/project'])?>">
                        <h2 class="img-title">
                            Проектирование
                        </h2>
                            <img src="img/project.jpg" id="img_index_proj">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-container"  id="img_cont_blag" >
                        <a href="<?= Url::to(['services/blag'])?>">
                        <h2 class="img-title">
                            Благоустройство
                        </h2>
                            <img src="img/blag_index_tab_new.jpg" id="img_index_blag">
                        </a>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="img-container">
                        <a href="<?= Url::to(['services/ozelen'])?>">
                        <h2 class="img-title">
                            Озеленение
                        </h2>
                            <img src="img/ozelen_index_tab_new.jpg">

                        </a>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="img-container">
                        <a href="<?= Url::to(['services/uhod'])?>">
                        <h2 class="img-title">
                            Сервисное обслуживание

                        </h2>

                            <img src="img/uhod_index_tab_new.jpg">

                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-container">
                        <a href="<?= Url::to(['services/stone'])?>">
                        <h2 class="img-title">
                            Натуральный <br>камень

                        </h2>

                            <img src="img/stone_index_tab_new.jpg">
                        </a>
                    </div>
                </div>
            </div>


          <!-- <div class="row">
                <div class="col-md-12">
                    <div class="img-container "id="build_index" style="height:400px">
                        <a href="<?= Url::to(['services/house'])?>">
                        <h2 class="img-title">
                            Строительство<br><br><br>
                            <span style="font-family: 'Bad Script', cursive">Скоро будет!</span>
                        </h2>
                            <img id="build_img" src="img/house_build_index.jpg" width="" style="height: 600px; position: relative;">

                        </a>

                    </div>
                </div>

            </div>-->
        </div>
    </div>


    <div class="introduction" >
        <div class="container">

            <div class="row post">
                <div class="col-md-5 col-lg-5 col-sm-12" style="overflow: hidden;">

                    <!--<img src="img/bg_new_3.jpg" height="600">-->
                    <img class="intr_img" src="img/trees5.jpg" height="600">
                </div>
                <div class=" col-md-offset-1 col-lg-offset-1 col-md-6 col-lg-6 introduct_index"
                     style=" margin-top:20px;">
                <span class="text_logo" style="font-size: 34px; line-height: 35px;">KOHTYP</span>
<!--                    <h1 class="introduct_h1"><b>Ландшафтный дизайн</b>-->
<!--                        <span class="spb"><br>в Санкт-Петербурге</span></h1>   -->
                    <p style="font-size:22px; margin-bottom:35px;"><b>Мы &mdash; те, кого вы ищете</b></p>

                    <p>Исторически сложилось так, что в современном мире основная масса населения живет в городах, поэтому
                        людям приходится постоянно слышать нескончаемый городской шум, созерцать железобетонные постройки,
                        что надоедает.
                    </p>
                    <!--<span class="slogan" style="text-transform: uppercase">Однако, выход есть!</span>-->

                    <p><b>Ландшафтный дизайн</b> – это то, что позволит вам любоваться живой природой, дышать чистым
                        воздухом, слушать журчание воды в ручье у себя на даче.</p>

<!--                    <br><span class="slogan_index">15 лет на рынке ландшафтных услуг</span>-->
                    <br><span class="slogan_index">Жить в красоте и удобстве проще, чем кажется</span>
                    <button class="purple_button signup"><img src="./img/proj_button.png">Оставить заявку</button>
                    <a href="<?= Url::to(['price/project'])?>">
                        <button class="purple_button"><img src="./img/price_button.png">Прайс-лист</button>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6  col-sm-12 post_2" id="banner_tags">
                    <!--<h3>Индивидуальный подход</h3>-->
                    <div class="banner_cont " style="text-align: left">
                        <p class="banner_title">
                            <span style="font-size: 60px;margin-left: -50px;">Проектирование</span><br>
                        </p>
                        <p class="banner_title">
                            <span style="font-size: 44px;margin-left: 80px;">Благоустройство</span><br>
                        </p>
                        <p class="banner_title">
                            <span style="font-size: 40px;margin-left: -50px;">Озеленение</span><br>
                        </p>
                        <p class="banner_title">
                            <span style="font-size: 36px; margin-left: 150px;">Уход</span>
                        </p>
                        <p class="banner_title">
                            <span style="font-size: 32px; margin-left: 100px;">Строительство</span><br>

                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <p class="cursive_text post" style="margin-top: 40px">
                        Многие определяют понятие «ландшафтный дизайн» как искусство.
                        Так как необходимо выполнить огромный комплекс работ по благоустройству участка (организации малых
                        архитектурных форм, дорожек, ограждений), озеленению (создание газонов, насаждений из деревьев,
                        кустов и клумб), устройству водоемов и фонтанов, горок, площадок и всего остального, что создает
                        облик участка на даче.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="advantages" style="position: relative;">
        <div class="container" >
            <img src="/img/gorka.png" id="adv_img" height="600" style="position: absolute; bottom: 0">
            <h2 class="main_h2">
                Преимущества работы с компанией <span class="text_logo" style="font-size: 34px;">KOHTYP</span>
            </h2>
            <br>

            <div class="row">
<!--                <div class="col-md-6 text-left">-->
<!--                    <!--<img src="http://livedemo00.template-help.com/wt_58440/images/home-02.jpg" alt="" height="400">-->
<!--                    <img src="/img/gorka.png" id="adv_img" height="600" style="margin-left:-60px; margin-top: -60px">-->
<!--                </div>-->
                <div class="col-md-offset-6 col-md-3 post">
                    <div class="center">
                        <blockquote>
                            <p>Создание уникальных проектов</p>
                        </blockquote>
                        <blockquote>
                            <p>Индивидуальный подход к каждому клиенту</p>

                        </blockquote>
                        <blockquote>
                            <p>Полный комплекс услуг по ландшафтному проектированию участков и их дизайну</p>

                        </blockquote>
                        <blockquote>
                            <p>Предоставление гарантии на работы</p>

                        </blockquote>
                    </div>
                </div>
                <div class="col-md-3 post">
                    <div class="center">
                        <blockquote>
                            <p>Соблюдение всех сроков и условий</p>
                        </blockquote>
                        <blockquote>
                            <p>Опыт и высокая квалификация наших специалистов</p>
                        </blockquote>
                        <blockquote>
                            <p>Соблюдение технологий и производства работ</p>

                        </blockquote>
                        <blockquote>
                            <p>Эстетическое наслаждение, комфорт и радость</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="addDiv">
        <div class="container">
            <h2 class="main_h2" style="margin-bottom: 60px">
                <span class="green">Подход</span> к каждому клиенту
            </h2>
            <div class="row text-center">
                <div class="col-md-4 col-sm-11">
                    <div class="addBlock  fadeInUp_block">
                        <img src="/img/2.png" height="100px">
                        <div class="divider divider-1"></div>
                        <a class="text-bold" href="<?= Url::to(['services/project'])?>">
                            Проектирование
                        </a>


                        <p>Грамотно составленный проект, включающий в себя все аспекты разработок и строительства,
                            станет отличным началом для воплощения ваших идей.</p>

                    </div>
                </div>

                <div class="col-md-4 col-sm-11 ">
                    <div class="addBlock fadeInUp_block">
                        <img src="/img/1.png" height="100px">
                        <div class="divider divider-1"></div>

                        <a class="text-bold" href="<?= Url::to(['price/project'])?>">Хорошие цены</a>


                        <p>Начиная с поиска лучшего дизайна для вашего участка и до воплощение плана в жизнь,
                            вы можете не сомневаться в результате, от которого вы будете в восторге.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-11">
                    <div class="addBlock fadeInUp_block">
                        <img src="/img/3.png" height="100px">
                        <div class="divider divider-1"></div>
                        <a class="text-bold" href="<?= Url::to(['gallary/index'])?>">Галерея</a>


                        <p>Галерея с нашими проектами поможет вам определиться с выбором и внести новые задумки в ваш
                            проект.</p>

                    </div>
                </div>
            </div>

        </div>
    </div>

  <div class="feature">
        <div class="container">
        <span class="text_logo">KOHTYP</span>
            <h3 class="feature_h3">Доверьте свой комфорт нам!</h3>
            <hr style="border: solid #ffa825; margin-top:40px; margin-bottom: 60px;" width="100px" size="2px" >


            <?php Pjax::begin(['id' => 'index-form']); ?>
            <?php if ($model->name2): ?>
                <p class="zayavka" style="color:#ffa825">Спасибо за обращение, <?php echo($model->name2.'!') ?></p>
                <p class="zayavka" style="color:#ffa825">Мы свяжемся с вами в ближайшее время!</p>
            <?php else: ?>

                <span class="zayavka" style="margin-bottom:20px">Оставьте заявку, и мы вас проконсультируем</span>
                <?php $form = ActiveForm::begin(['options' => ['class' => 'contact_form', 'data-pjax' => true]]); ?>
                
                <?= $form->field($model, 'name2')->textInput(['maxlength' => 255], ['class' => 'input-modal']) ?>

                <?= $form->field($model, 'email2')->textInput(['maxlength' => 255], ['class' => 'input-modal']) ?>  

                <div class="validator">
                    <?= $form->field($model, 'name')->textInput(['maxlength' => 255], ['class' => 'validator']) ?>
                    <?= $form->field($model, 'email')->textInput(['maxlength' => 255], ['class' => 'validator']) ?>
                </div>
                <div class="form-group">
                    <?= Html::submitButton('Отправить', ['class' => 'purple_button', ]) ?>
                </div>

                <?php ActiveForm::end(); ?>

            <?php endif; ?>
            <?php Pjax::end(); ?>

        </div>
    </div>
</div>

