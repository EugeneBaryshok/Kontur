<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
use app\assets\AppAsset;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;
use yii\bootstrap\ActiveForm;



$this->title = 'Заказать Ландшафтный дизайн в СПб | Ландшафтный дизайн под ключ';
?>


<style>
    .after-defore_row
    {
        margin-bottom: 30px;
    }
    .twentytwenty-container
    {
        background: none !important;
        border-bottom: none  !important;
        padding-bottom: 0;
    }
</style>

<div class="proekt_top" style=" background: url(/img/blag_main_new.jpg) no-repeat  center fixed; background-size: cover;">
    <div class="top_bg">
    </div>
    <div class="jumbotron jumbotron-pages">
        <div class="container" style="text-align: left">
            <div class="col-md-12 col-lg-12" style="background-color: rgba(0,0,0,0.6)">
                <h1>Ландшафтный дизайн в Санкт-Петербурге</h1>
                <p>Если ваш дачный участок
                    похож скорее на дикий пустырь,
                    то работы по благоустройству территории — то, что решит проблемы.</p>
                <!--<button>Взглянуть</button>-->
            </div>
        </div>
    </div>
</div>

<div class="wood">
    <div class="container">
             <h2> <span class="green">Услуги ландшафтного проектирования:</span></h2>


        <div class="row" style="margin-top: 60px">
            <div class="col-md-3 col-lg-3 ">

                <div class="dop_doc_div">
                    <img src="/img/genplan.png" height="100">
                    <p style="font-size: 22px" class="green"><b>Ландшафтное проектирование</b></p>
                    <p class="dop_doc_p">Схема с отображением системы полива и водоснабжения участка</p>
                    <a href="http://konturland.ru/services/project">
                        <button class="purple_button">Подробнее</button>
                    </a>
                </div>

            </div>
            <div class="col-md-3 col-lg-3 ">

                <div class="dop_doc_div">
                    <img src="/img/denplan.png" height="100">
                    <p style="font-size: 22px" class="green"><b>Благоустройство</b></p>
                    <p class="dop_doc_p">Схема освещения участка, фонарей, точек подключения к сети</p>
                    <a href="http://konturland.ru/services/blag">
                        <button class="purple_button">Подробнее</button>
                    </a>
                </div>

            </div>
            <div class="col-md-3 col-lg-3 ">

                <div class="dop_doc_div">
                    <img src="/img/denplan.png" height="100" >
                    <p style="font-size: 22px" class="green"><b>Озеленение</b></p>
                    <p class="dop_doc_p">Метраж и расположение всех видов покрытий на участке</p>
                    <a href="http://konturland.ru/services/ozelen">
                        <button class="purple_button">Подробнее</button>
                    </a>
                </div>

            </div>
            <div class="col-md-3 col-lg-3 ">

                <div class="dop_doc_div">
                    <img src="/img/razb.png" height="100" >
                    <p style="font-size: 22px" class="green"><b>Сервисное обслуживание</b></p>
                    <p class="dop_doc_p">План работ по озеленению и ведомость растений</p>
                    <a href="http://konturland.ru/services/uhod">
                        <button class="purple_button">Подробнее</button>
                    </a>
                </div>

            </div>
        </div>

    </div>

</div>

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





<div class="container gallary">
    <h2 style="margin-bottom: 30px">Ландшафтный дизайн в СПб и Ленинградской области <span class="green">— фото до и после</span></h2>
    <div class="row after-defore_row" id="1">
        <div class="col-md-6">
            <div class="large-8 columns">
                <div class="twentytwenty-container">
                    <img src="/img/before_after/r_before1.jpg" width="100%"/>
                    <img src="/img/before_after/r_after1.jpg" width="100%"/>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="large-8 columns">
                <div class="twentytwenty-container">
                   <img src="/img/before_after/r_before2.jpg" width="100%"/>
                    <img src="/img/before_after/r_after2.jpg" width="100%"/>
                </div>
            </div>
        </div>
    </div>

 <div class="row after-defore_row" id="2">
        <div class="col-md-6">
            <div class="large-8 columns">
                <div class="twentytwenty-container">
                    <img src="/img/before_after/r_before3.jpg" width="100%"/>
                    <img src="/img/before_after/r_after3.jpg" width="100%"/>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="large-8 columns">
                <div class="twentytwenty-container">
                   <img src="/img/before_after/r_before4.jpg" width="100%"/>
                    <img src="/img/before_after/r_after4.jpg" width="100%"/>
                </div>
            </div>
        </div>
    </div>

 <div class="row after-defore_row" id="3">
        <div class="col-md-6">
            <div class="large-8 columns">
                <div class="twentytwenty-container">
                    <img src="/img/before_after/r_before5.jpg" width="100%"/>
                    <img src="/img/before_after/r_after5.jpg" width="100%"/>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="large-8 columns">
                <div class="twentytwenty-container">
                   <img src="/img/before_after/z_before1.jpg" width="100%"/>
                    <img src="/img/before_after/z_after1.jpg" width="100%"/>
                </div>
            </div>
        </div>
    </div>

 <div class="row after-defore_row" id="4">
        <div class="col-md-6">
            <div class="large-8 columns">
                <div class="twentytwenty-container">
                    <img src="/img/before_after/g_before1.jpg" width="100%"/>
                    <img src="/img/before_after/g_after1.jpg" width="100%"/>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="large-8 columns">
                <div class="twentytwenty-container">
                   <img src="/img/before_after/g_before2.jpg" width="100%"/>
                    <img src="/img/before_after/g_after2.jpg" width="100%"/>
                </div>
            </div>
        </div>
    </div>

 <div class="row after-defore_row" id="5">
        <div class="col-md-6">
            <div class="large-8 columns">
                <div class="twentytwenty-container">
                    <img src="/img/before_after/v_before1.jpg" width="100%"/>
                    <img src="/img/before_after/v_after1.jpg" width="100%"/>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="large-8 columns">
                <div class="twentytwenty-container">
                   <img src="/img/before_after/v_before2.jpg" width="100%"/>
                    <img src="/img/before_after/v_after2.jpg" width="100%"/>
                </div>
            </div>
        </div>
    </div>


</div>


<div class="slider-block">
<div class="slider">
<div class="slider-img">
   <img src="/img/before_after/g_before1.jpg" width="100%"/>
                    </div>

<div class="slider-img">

                    <img src="/img/before_after/g_after1.jpg" width="100%"/>
                    </div>
                    </div>
</div>
    <div class="addDiv">
        <div class="container">
            <h2 class="main_h2" style="margin-bottom: 60px">
                <span class="green">Подход</span> к каждому клиенту
            </h2>
            <div class="row row-flex text-center">
                <div class="col-md-4 col-sm-11">
                    <div class="price-block  fadeInUp_block">
                        <!-- <img src="/img/2.png" height="100px"> -->
                       
                        <p class="text-bold">Light</a>
                        <div class="divider divider-1"></div>

                       <ul>
                        <li>Планировка участка</li>
                        <li>Дренажная система</li>
                        <li>Ливневая канализация</li>
                        <li>Система освещения</li>
                        <li>Мощение дорожек/площадок</li>
                        <li>Устройство посевного газона</li>
                    </ul>
                     <p class="price">от <span>50 000</span> руб. за сотку</p>
                     <button class="purple_button  signup " style=""><img src="/img/email_white_2.png">Оставить заявку</button>
                    </div>
                </div>

                <div class="col-md-4 col-sm-11 ">
                    <div class="price-block sec-block fadeInUp_block">
                        <!-- <img src="/img/1.png" height="100px"> -->
                      

                        <p class="text-bold">Medium</a>
                          <div class="divider divider-1"></div>
                        <ul>
                        <li>Планировка участка</li>
                        <li>Дренажная система</li>
                        <li>Ливневая канализация</li>
                        <li>Установка вод.розеток для полива</li>
                        <li>Система освещения</li>
                        <li>Мощение дорожек</li>
                        <li>Детская или спортивная площадка</li>
                        <li>Устройство рулонного газона</li>
                        <li>Рокарии/Альпинарии</li>
                        <li>Подпорные стенки</li>
                        <li>Искусственный водоем</li>
                        <li>Подбор и посадка растений</li>
                        <li>Геопластика</li>
                        </ul>
                        <p class="price">от <span>100 000</span> руб. за сотку</p>
                        <button class="purple_button  signup " style=""><img src="/img/email_white_2.png">Оставить заявку</button>
                    </div>
                </div>

                <div class="col-md-4 col-sm-11">
                    <div class="price-block third-block fadeInUp_block">
                        <!-- <img src="/img/3.png" height="100px"> -->
                         <p class="text-bold">Optimum</p>
                           <div class="divider divider-1"></div>
                        <ul>
                        <li>Дизайнерский надзор</li>
                        <li>Планировка участка</li>
                        <li>Укрепление откосов</li>
                        <li>Террасирование</li>
                        <li>Геопластика</li>
                        <li>Подпорные стенки</li>
                        <li>Дренажная система</li>
                        <li>Ливневая канализация</li>
                        <li>Система автомат. полива</li>
                        <li>Система освещения</li>
                        <li>Мощение дорожек/площадок</li>
                        <li>Спортивная площадка</li>
                        <li>Устройство рулонного газона</li>
                        <li>Рокарии /Альпинарии</li>
                        <li>Искусственный водоем</li>
                        <li>Подбор и посадка растений</li>
                        <li>МАФ</li>
                        </ul>                
                        <p class="price">от <span>250 000</span> руб. за сотку</p>
                        <button class="purple_button signup " style=""><img src="/img/email_white_2.png">Оставить заявку</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
  <div class="feature feature-short">
        <div class="container">
        <span class="text_logo">KOHTYP</span>
            <h3 class="feature_h3">Закажите ландшафтный дизайн у нас!</h3>
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

<?php

\app\assets\BeforeAfterAsser::register($this);
?>