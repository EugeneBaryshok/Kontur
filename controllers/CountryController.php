<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;
use app\models\Seo_metapath;
use Yii;
use yii\helpers\Url;
class CountryController extends Controller
{
    public function actionIndex()
    {

           Country::Seo();
        $description = Seo_metapath::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $description->count(),
        ]);

        $countries = $description->orderBy('title')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();


        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
            'description' => $description
        ]);
    }
}