<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $gallaryUrl = '@web/img/blag';

    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\web\YiiAsset',

    ];
    public $css = [
//        'css/site.css',
        'css/fonts.css',
        'css/style.css',
        'css/main_pages.css',
        'css/gallary.css',
        'css/price.css',
        'css/articles.css',
        'css/set1.css',
       
        'css/animate.css',
        'css/footablecss/footable.bootstrap.css',
        'js/fancybox/jquery.fancybox.css',


    ];
    public $js = [
 //       'js/map.js',
        'js/jquery.viewportchecker.js',
//        'js/jquery.event.move.js',
        'js/footable/footable.min.js',
        'js/header.js',
        'js/slider.js',
        'js/fancybox/jquery.fancybox.pack.js',
        'js/jquery.mosaicflow.min.js',
        'js/fancybox_my.js',
        'js/index.js',
       // 'js/text-animate.js',
    ];

}
