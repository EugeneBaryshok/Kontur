<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Country;
class ServicesController extends Controller
{
    public function actionProject()
    {
Country::Seo();
        return $this->render('project');
    }
    public function actionBlag()
    {
Country::Seo();
        return $this->render('blag');
    }
    public function actionOzelen()
    {
Country::Seo();
        return $this->render('ozelen');
    }
    public function actionUhod()
    {
Country::Seo();
        return $this->render('uhod');
    }
    public function actionStone()
    {
Country::Seo();
        return $this->render('stone');
    }
    public function actionHouse()
    {
Country::Seo();
        return $this->render('house');
    }
}