<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
$this->title = 'Примеры ландшафтного дизайна | Фото портфолио компании "Контур"';
?>
    <div class="container" id="portfolio">
    <div class="row">
        <h1 style="margin-bottom: 30px"><span class="green">Примеры ландшафтного дизайна:</span> галерея фото</h1>
    </div>
    <div class="clearfix mosaicflow">
       <? $gallaryUrl ?>
<?php foreach ($array as $image): ?>
    <div class="mosaicflow__item">
    <a class="fancyimage" rel="group" href="/img/blag/blag_img/<?= Url::to($image)?>">
        <?= Html::img("/".$gallaryUrl."/".$image, ['alt' => $image]) ?>
<!--        <img src="img/blag/blag_tabs/1.jpg"/>-->
    </a>
    </div>

<?php endforeach; ?>

<!---->
<!--<ul>-->
<?php //foreach ($countries as $country): ?>
<!--    <li>-->
<!--        --><?//= Html::encode("{$country->name} ({$country->code})") ?><!--:-->
<!--        --><?//= $country->population ?>
<!--    </li>-->
<?php //endforeach; ?>
<!--</ul>-->

<?//= LinkPager::widget(['pagination' => $pagination]) ?>
    </div>
    </div>
<!--<script type="text/javascript">-->
<!--    $(document).ready(function () {-->
<!--        $("a.fancyimage").fancybox();-->
<!--    });-->
<!--</script>-->