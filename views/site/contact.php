<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */
/*@var Modal yii\bootstrap\Modal; */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;
use yii\bootstrap\Modal;

$this->title = 'Контакты';
//$this->params['breadcrumbs'][] = $this->title;  Хлебные крошки
?>
<style>
.validator
{
display:none;
}
</style>
<!--<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>-->
<div class="site-contact">

    <div class=" contacts">
        <div class="container">
            <h1><?= Html::encode($this->title) ?></h1>
            <div class="row">
                <div class="col-md-6">

				 <h2 class="text_logo" style="   font-size: 42px; margin-bottom:20px;  line-height: 45px;">OOO "KOHTYP"</h2>
                <!--<h2 style="margin-top: 0px;margin-bottom: 10px; ">ООО "КОНТУР"</h2>-->
                <p class="green_bold">Ландшафтный дизайн, благоустройство, озеленение</p>
                <p><b>г. Санкт-Петербург, ул. Тамбасова, д. 12, каб. 381</b></p>
                <div class="ya-phone-cont">
                	<p><b>тел.:</b> (812) 670-54-24 (офис)</p>
					<p><b>моб.:</b> +7 (931) 360-33-85 (на связи до 22.00)</p>
                </div>
				<p><b>часы работы:</b> Пн.-Сб. с 9.00 до 20.00</p>
                <p><b>e-mail:</b> konturland@mail.ru</p>
                
                    <div id='map'></div>
                </div>


            <div class=" col-md-offset-1 col-md-5">

                <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

                    <div class="alert alert-success">
                        Спасибо за ваше обращение! Мы обязательно свяжемся с вами в ближайшее время.
                    </div>

<!--                    <p>-->
<!--                        Note that if you turn on the Yii debugger, you should be able-->
<!--                        to view the mail message on the mail panel of the debugger.-->
<!--                        --><?php //if (Yii::$app->mailer->useFileTransport): ?>
<!--                            Because the application is in development mode, the email is not sent but saved as-->
<!--                            a file under <code>--><?//= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?><!--</code>.-->
<!--                                                                                                                Please configure the <code>useFileTransport</code> property of the <code>mail</code>-->
<!--                            application component to be false to enable email sending.-->
<!--                        --><?php //endif; ?>
<!--                    </p>-->

                <?php else: ?>

                    <p>
                        Если у Вас есть какие-нибудь вопросы, пожалуйста, заполните форму, чтобы связаться с нами. Мы с радостью на них ответим!
                    </p>



                            <?php $form = ActiveForm::begin(['id' => 'contact-form', validateOnSubmit => false]); ?>

                            <?= $form->field($model, 'name2')->textInput(['autofocus' => false])->label('Ваше имя'); ?>

                        <!--    <?= $form->field($model, 'phone')->label('Телефон'); ?>-->

                            <?= $form->field($model, 'email2')->label('Телефон/Email'); ?>

                                <?= $form->field($model, 'body')->textarea(['rows' => 6])->label('Текст сообщения'); ?>
                            <div class="validator">
                                <?= $form->field($model, 'name')->textInput(['maxlength' => 255], ['class' => 'validator']) ?>
                                <?= $form->field($model, 'email')->textInput(['maxlength' => 255], ['class' => 'validator']) ?>
                            </div>

<!--                            --><?//= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
//                                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
//                            ]) ?>

                            <div class="form-group">
                                <?= Html::submitButton('Отправить', ['class' => 'purple_button', 'name' => 'submit', ]) ?>
                            </div>

                            <?php ActiveForm::end(); ?>



                <?php endif; ?>
            </div>
            </div>


    <div>

    </div>
</div>
        </div>
    </div>

<!---->
<?php
//
//yii\bootstrap\Modal::begin([
//    'header' => 'Заказать проект',
//    'id' => 'my-modal',
//    'size' => 'modal-md',
//]);
//?>
<!--    <div id='modal-content'>Загружаю...</div>-->
<?php //yii\bootstrap\Modal::end(); ?>



<!---->
<!--    <a id="modal-btn" data-target="#myModal">Заказать</a>-->


<!--    <button type="button" class="btn btn-default signup btn-sm" data-toggle="modal" data-userid="22" data-target="#myModal">-->
<!--        Заказать обратный звонок-->
<!--    </button>-->
<!---->
<!--<p><a class="btn btn-success signup" data-userid="22" >Заказать проект</a></p>-->
<?php $this->registerJsFile('/js/map.js'); ?>
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyB9Jkrsf5YmkJPomII8Q5inw04xK8ZkeQ0&sensor=false&extension=.js'></script>
