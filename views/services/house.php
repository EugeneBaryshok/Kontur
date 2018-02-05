<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Строительство';

?>

<style>
    .header {
        background:linear-gradient(to top, rgba(255,255,255,0.7), rgba(255, 255, 255, 1)), url(../img/house_build_index.jpg) no-repeat center fixed;
        background-size:cover;
    }
    .wrap
    {
        height: 70% !important;
        min-height: 70%; !important;
        padding-bottom: 0;
    }
    .proekt_top
    {
        height: 91%;
    }
</style>

<div class="proekt_top" style=" background: url(/img/house.jpg) no-repeat  center fixed; background-size: cover;">
    <div class="top_bg">

    </div>
    <div class="jumbotron jumbotron-pages">
        <div class="container" style="text-align: left">
            <div class="col-md-5 col-lg-5   " style="background-color: rgba(0,0,0,0.6)">
                <h1><?= Html::encode($this->title) ?></h1>
                <p>Страница находится в разработке</p>
                <!--<button>Взглянуть</button>-->
            </div>
        </div>
    </div>
</div>
