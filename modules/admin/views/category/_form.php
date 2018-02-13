<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput() ?>

    <?= $form->field($model, 'metatitle')->textInput() ?>

 	<?= $form->field($model, 'metadescription')->textInput() ?>

    <?= $form->field($model, 'texttop')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'textbottom')->textarea(['rows' => 6]) ?>




    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
