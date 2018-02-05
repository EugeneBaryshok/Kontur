<?php
namespace app\assets;

use yii\web\AssetBundle;

class BeforeAfterAsser extends AssetBundle
{
    public $basePath = '@webroot'; //алиас каталога с файлами, который соответствует @web
    public $baseUrl = '@web';//Алиас пути к файлам
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $css = [
        'css/twentytwenty.css',
    ];
    public $js = [
        'js/jquery.twentytwenty.js',
        'js/jquery.event.move.js',
        'js/twenty.js'
    ];

}

