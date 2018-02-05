<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
use app\assets\AppAsset;

$this->title = 'Примеры ландшафтного дизайна | Фото портфолио компании "Контур"';
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


<div class="container gallary">
    <h1 style="margin-bottom: 30px">Галерея работ до и <span class="green">после</span></h1>
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


<?php

\app\assets\BeforeAfterAsser::register($this);
?>