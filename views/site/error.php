<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = 'Страница не найдена';
?>

<div class="site-error">

    <div class=" contacts">
        <div class="container">
    <h1>Ошибка 404</h1>

    <!--<div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>-->

    
	<p><img src="/img/gorka.png" style="align:left; padding-right:20px; padding-bottom:20px; width:250px;">
        Страница не существует, переименована, или вы неправильно набрали ее адрес.<br>
        Возможно, вас заинтересуют разделы:<br>   
          <ul>
		<li><?= Html::a('Ландшафтный дизайн', ['site/index']) ?></li>
		<li><?=		Html::a('Галерея наших работ', ['site/gallary/index']) ?></li>
		<li><?= Html::a('Связаться с нами', ['site/contact']) ?></li>
		</ul>
	</p>
		 
        </div>
        </div>
</div>
