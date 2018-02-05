<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\gbUser $model
 * @var yii\widgets\ActiveForm $form
 */
?>
<style>
.validator
{
display:none;
}
</style>
<!--<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>-->
<div id="success"> </div> <!-- For success message -->

<div class="gb-user-form">

    <?php $form = ActiveForm::begin(['options' => ['class' => 'signup-form']]); ?>

    <?= $form->field($model, 'name2')->textInput(['maxlength' => 255], ['class' => 'input-modal']) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => 255], ['class' => 'input-modal']) ?>

    <?= $form->field($model, 'email2')->textInput(['maxlength' => 255], ['class' => 'input-modal']) ?>

    <?= $form->field($model, 'body')->textarea(['rows' => 6])->label('Текст сообщения'); ?>
<div class="validator">
    <?= $form->field($model, 'name')->textInput(['maxlength' => 255], ['class' => 'validator']) ?>
    <?= $form->field($model, 'email')->textInput(['maxlength' => 255], ['class' => 'validator']) ?>
</div>

    <div class="form-group text-right">
        <?= Html::submitButton('Отправить', ['class' => 'purple_button btn-update-password']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>