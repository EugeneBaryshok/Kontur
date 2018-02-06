<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\bootstrap\ActiveForm;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/img/ico_green.ico" type="image/x-icon"
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
   
    <?php $this->head() ?>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97331011-1', 'auto');
  ga('send', 'pageview');
//ga('set', 'userId', {{USER_ID}});  Задание идентификатора пользователя с помощью параметра user_id (текущий пользователь).
</script>
</head>
<body>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter37302875 = new Ya.Metrika({
                    id:37302875,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/37302875" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?php $this->beginBody() ?>

<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-4 col-sm-3 col-xs-4 logo ">
<!--                <img src="/img/logo.png" style="width: 52%" id="logo_top" class="">-->
                <a href="<?= Url::to(['site/index'])?>">
                <?= Html::img('@web/img/logo.png', ['alt' => 'Ландшафтный дизайн в СПб', 'id' => 'logo_top']) ?>
                </a>
            </div>
            <div class="col-md-3 col-lg-4 col-sm-3 col-xs-6">
                <div class="contacts " >
                    <img src="/img/PhoneButton_2.png" style="float:left;width: 60px; padding-right: 10px"
                         class="adress_icon">
                    <div class="tel-wrap">
                       <a class="phone tel670" href="tel:+78126705424">+7 (812) 670-54-24</a>
                        <br>
                        <a class="phone tel931" href="tel:+79313603385">+7 (931) 360-33-85</a> 
                    </div>     
                </div>

            </div>

            <div class="col-md-5 col-lg-4 col-sm-5 col-xs-6" style=" text-align: right;">
                <div class="contacts">
                    <img src="/img/gps_2.png" style="float:left;width: 60px;padding-right: 10px"class="adress_icon">
                    <p id="address" class="phone" style="float: left;"><span class="city" ><b>Санкт-Петербург</b></span><br/>
                        <span class="street">ул. Тамбасова, д. 12, оф. 381</span></p>
                </div>

            </div>

        </div>
    </div>
</div>


<nav role="navigation" class=" navbar navbar-default unfixed-menu" id="adaptive_menu">

    <!-- Логотип и мобильное меню -->
	
    <div class="navbar-header" style=" line-height: 50px;">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
       <a href="<?= Url::to(['site/index'])?>">
        <img src="/img/logo_white.png" style="width: 23%;display: none;vertical-align: middle;" class="adaptive_logo">
       </a>
        <button class="purple_button purple_button_top_phone signup " style="width: 50px !important;"><img src="/img/email_white_2.png"></button>
<!--	   <img class="signup" src="/img/email_white_2.png" id="email_nav_mobile" >-->

    </div>
    <!-- Навигационное меню -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <img src="/img/logo_white.png" id="logo_tree">
        <button class="purple_button purple_button_top signup " style=""><img src="/img/email_white_2.png">Оставить заявку</button>
        <button class="purple_button purple_button_top_phone signup " id="zayavka_button"><img src="/img/email_white_2.png"></button>
<!--        <img class="signup" src="/img/email_white_2.png" id="email_nav">-->
<!--        <button class="btn btn-outline-success" type="button">Main button</button>-->
        <ul class="nav navbar-nav">
            <li class="active">
                <?= Html::a('Главная', ['site/index']) ?>
            </li>
            <li class=" dropdown" id="work">
                <a data-toggle="dropdown" href="#" class="dropdown-toggle">Услуги</a>
                <ul role="menu" class="dropdown-menu" id="dropdown-menu-work">
                    <li>  <?= Html::a('Проектирование', ['services/project']) ?></li>
                    <li> <?= Html::a('Благоустройство', ['services/blag']) ?></li>
                    <li> <?= Html::a('Озеленение', ['services/ozelen']) ?></li>
                    <li><?= Html::a('Сервисное обслуживание', ['services/uhod']) ?></li>
                   <!-- <li><?= Html::a('Строительство', ['services/house']) ?></li>-->
                    <li><?= Html::a('Продажа <br>натурального камня', ['services/stone']) ?></li>
                </ul>
            </li>


            <li class="dropdown" id="price">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Цены и акции</a>
                <ul role="menu" class="dropdown-menu" id="dropdown-menu-price">
                    <li> <?= Html::a('На проектирование', ['price/project']) ?></li>
                    <li><?= Html::a('На благоустройство', ['price/blag']) ?></li>
                    <li><?= Html::a('На озеленение', ['price/ozelen']) ?></li>
                    <li><?= Html::a('На сервисное обслуживание', ['price/uhod']) ?></li>
                   <!-- <li><?= Html::a('На строительство', ['price/project']) ?></li>-->
                    <li><?= Html::a('На натуральный камень', ['price/kamen']) ?></li>

                    <!--li><a href="#">Акции</a></li-->
                </ul>
            </li>
           <li class=" dropdown" id="portf">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Портфолио</a>
                <ul role="menu" class="dropdown-menu" id="dropdown-menu-portf">
                    <li><?= Html::a('Галерея', ['gallary/index']) ?></li>
                    <li><?= Html::a('ДО и ПОСЛЕ', ['gallary/after']) ?></li>
                </ul>
            </li>
             <li>
                  <?= Html::a('Статьи', ['articles/articles_list']) ?>
            </li>
           <!-- <li>
              
            </li>-->
            <li>
                <?= Html::a('Контакты', ['site/contact']) ?>
            </li>
        </ul>



    </div>
</nav>


<div class="wrap">

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>

</div>




<div class="footer_upper">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 foot_logo_div">
                <img src="/img/New_Logo.png" height="100">
            </div>
            <div class="col-md-4 col-sm-3 col-xs-12  align-left foot_phone_div" style="padding-top: 20px">
<!--                <p><img src="/img/PhoneButton_2.png">-->
<!--                    +7(812)670-54-24</p>-->
                <div class="contacts_footer">
                <img src="/img/PhoneButton_2.png" style="float:left;width: 54px; padding-right: 10px"
                     class="adress_icon_footer">
                <div class="tel-wrap">
                    <a style="color:white" class="phone_footer tel670" href="tel:+78126705424">+7 (812) 670-54-24</a>
                    <br>
                    <a style="color:white" class="phone_footer tel931" href="tel:+79313603385">+7 (931) 360-33-85</a>
                </div>     
                
                </div>
            </div>

            <div class="col-md-5  col-sm-3 col-xs-12 foot_mail_div" style="padding-top: 20px; float: left">
                <div class="contacts_footer" style="text-align: right">
                <img src="/img/email_2.png" style="width: 54px; padding-right: 10px"
                     class="adress_icon_footer">
                <a style="color:white" class="phone_footer email_footer" href="mailto:konturland@mail.ru">konturland@mail.ru</a>
<!--                <p><img src="/img/email_2.png">-->
<!--                    </p>-->
                </div>
            </div>
			<div class="col-xs-12 col-sm-12" id="foot_address_div" style="text-align: left">
			 
                <h3 class="foot_address_h3">Санкт-Петербург</h3>
                <p>ул. Тамбасова д. 12, оф. 381</p>


            </div>
			

        </div>
    </div>
</div>


<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 align-left main_link">

                <?= Html::a('Главная', ['site/index']) ?>
                <?= Html::a('Галерея', ['gallary/index']) ?>
                <?= Html::a('Контакты', ['site/contact']) ?>


            </div>
            <div class="col-md-2 col-sm-5 col-xs-6">
                <a href="#" class="main_link">Ландшафтный<br> дизайн</a>
                 <?= Html::a('Проектирование', ['services/project']) ?>
                 <?= Html::a('Благоустройство', ['services/blag']) ?>
                 <?= Html::a('Озеленение', ['services/ozelen']) ?>
                <?= Html::a('Сервисное обслуживание', ['services/uhod']) ?>

            </div>
            <div class="col-md-2 col-sm-5 col-xs-6">
                <a href="#" class="main_link">Дополнительные работы</a>

                <?= Html::a('Строительство', ['services/house']) ?>
                <?= Html::a('Продажа <br>натурального камня', ['services/stone']) ?>
            </div>

            <div class="col-md-4 col-md-offset-1 col-xs-12 col-sm-12" style="text-align: right">
                <h3 class="footer_h3">Санкт-Петербург</h3>
                <p>ул. Тамбасова д. 12, оф. 381</p>
               
                <p style="color:#05b2b8; font-size: 14px; margin-top: 30px">Разработка сайта
                    <a style="color:white; display: initial;" rel="nofollow" href="https://eugenebaryshok.myportfolio.com/">
                        <img style="width: 120px; height: auto;" src="/img/create_logo_white.png"></a>
                </p>

            </div>
        </div>
    </div>
</footer>

<a href="#" class="scrollup">Наверх</a>

<?php

yii\bootstrap\Modal::begin([
    'header' => 'Оставить заявку',
    'id' => 'my-modal',
    'size' => 'modal-md',
]);
?>
<div id='modal-content'>Загружаю...</div>
<?php yii\bootstrap\Modal::end(); ?>



<!---->
<!--    <a id="modal-btn" data-target="#myModal">Заказать</a>-->


<!--    <button type="button" class="btn btn-default signup btn-sm" data-toggle="modal" data-userid="22" data-target="#myModal">-->
<!--        Заказать обратный звонок-->
<!--    </button>-->
<!---->


<?php $this->endBody() ?>
<!-- <script type="text/javascript" src="//api.venyoo.ru/wnew.js?wc=venyoo/default/science&widget_id=5342828504547328"></script> -->
</body>
</html>
<?php $this->endPage() ?>
