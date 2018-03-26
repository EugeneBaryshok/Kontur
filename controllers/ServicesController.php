<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Country;
use app\models\SignupForm;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use vova07\imperavi\Widget;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\IndexForm;
use app\models\EntryForm;
use yii\helpers\Url;

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
//     public function actionDizayn()
//     {
// Country::Seo();
//         return $this->render('dizayn');
//     }

        public function actionDizayn()
    {
Country::Seo();
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail']) && $model->contact(Yii::$app->params['additionalEmail']))  {
            if (!Yii::$app->request->isPjax) {
                return $this->redirect(['view','name' => $model->name]);
            }
        }
//        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
//            Yii::$app->session->setFlash('contactphoneFormSubmitted');
//
//            return $this->refresh();
//        }
        return $this->render('dizayn',['model' => $model,]);
    }





     public function actionShungit()
    {
Country::Seo();
        return $this->render('shungit');
    }
     public function actionBruschatka()
    {
Country::Seo();
        return $this->render('bruschatka');
    }
     public function actionIzvestnyak()
    {
Country::Seo();
        return $this->render('izvestnyak');
    }
     public function actionKroshka()
    {
Country::Seo();
        return $this->render('kroshka');
    }
     public function actionKvarcitopeschanik()
    {
Country::Seo();
        return $this->render('kvarcitopeschanik');
    }
         public function actionPeschanik()
    {
Country::Seo();
        return $this->render('peschanik');
    }
         public function actionSlanec()
    {
Country::Seo();
        return $this->render('slanec');
    }
         public function actionZlatotit()
    {
Country::Seo();
        return $this->render('zlatotit');
    }
             public function actionGalka()
    {
Country::Seo();
        return $this->render('galka');
    }
             public function actionBulyzhnik()
    {
Country::Seo();
        return $this->render('bulyzhnik');
    }
             public function actionLemezit()
    {
Country::Seo();
        return $this->render('lemezit');
    }
    
    
    
    
    
}