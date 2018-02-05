<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Country;
class ArticlesController extends Controller
{
       
    public function actionGazon()
    {

 Country::Seo();
        return $this->render('ozelen_gazon');
    }
    public function actionTree()
    {
 Country::Seo();
        return $this->render('ozelen_tree');
    }
    public function actionFlower()
    {
  Country::Seo();
        return $this->render('ozelen_flower');
    }
}