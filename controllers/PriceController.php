<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Country;

class PriceController extends Controller
{
    public function actionProject()
    {
Country::Seo();
        return $this->render('price_project');
    }
    public function actionBlag()
    {
Country::Seo();
        return $this->render('price_blag');
    }
    public function actionOzelen()
    {
Country::Seo();
        return $this->render('price_ozelen');
    }
    public function actionUhod()
    {
Country::Seo();
        return $this->render('price_uhod');
    }
    public function actionKamen()
    {
Country::Seo();
        return $this->render('price_kamen');
    }
    public function actionBuild()
    {
Country::Seo();
        return $this->render('price_build');
    }


}