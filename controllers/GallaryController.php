<?php

namespace app\controllers;

use yii\helpers\FileHelper;
use yii\web\Controller;
use yii\data\Pagination;

use app\models\Country;

class GallaryController extends Controller
{
    public function actionIndex()
    {
        Country::Seo();
        $gallaryUrl="img/blag/blag_tabs";
        $files=FileHelper::findFiles($gallaryUrl,['only'=>['*.jpg','*.png']]);

        foreach ($files as $value)
            $array[] = basename($value);

        $images = $files;
//        $images_full = $files_full;
//        $full_image=
//            ->orderBy('name')
//            ->offset($pagination->offset)
//            ->limit($pagination->limit)
//            ->all();

        return $this->render('index', [
            'images' => $images,
            'array' => $array,
            'gallaryUrl'=>$gallaryUrl
//            'pagination' => $pagination,
        ]);
    }
    public function actionAfter()
    {
        Country::Seo();
        return $this->render('after');
    }
}