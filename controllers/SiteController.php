<?php

namespace app\controllers;

use app\models\SignupForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\IndexForm;
use app\models\EntryForm;
use app\models\Country;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {

        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */

//    public function actionContactphone()
//    {
//        $model = new ContactphoneForm();
//        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail']))
//        {
//            Yii::$app->session->setFlash('contactphoneFormSubmitted');
//            return $this->refresh();
//        }
//        return $this->render('contactphone', [
//            'model' => $model,
//        ]);
//    }

    public function actionContact()
    {
Country::Seo();
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail']) && $model->contact(Yii::$app->params['additionalEmail']))
        {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionIndex()
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
        return $this->render('index',['model' => $model,]);
    }




    /**
     * Displays contact page.
     *
     * @return string
     */
//    public function actionContact()
//    {
//        $model = new ContactForm();
//        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail']) && $model->contact(Yii::$app->params['additionalEmail'])) {
//            Yii::$app->session->setFlash('contactFormSubmitted');
//
//            return $this->refresh();
//        }
//        return $this->render('contact', [
//            'model' => $model,
//        ]);
//    }



    public function actionDownload($id) {
        //$file = $this->loadModel($id);
        $file = basename($id);
        if ($file === null) {
            throw new NotFoundHttpException('File not found');
        }

//        return Yii::$app->response->sendFile(Yii::getAlias('@webroot/upload/' . $file->src));
        return Yii::$app->response->sendFile(Yii::getAlias('@webroot/upload/' . $file));
    }

//    public function actionDownload($id)
//    {
//        // загружаем модель
//        $file = $this->loadModel($id);
//        // Путь к папке с файлом
//        $path = Yii::getPathOfAlias('webroot.media') . DIRECTORY_SEPARATOR . $file->book;
//
//
//        Yii::app()->request->sendFile($file->book, file_get_contents($path));
//    }




    // Всплывшее модальное окно заполняем представлением signup.php формы с полями
    public function actionSignup()
    {
        $model = new \app\models\SignupForm();
        //$model->id =$userid;
        return $this->renderPartial('signup', [
            'model' => $model,
        ]);
    }

// По нажатию в модальном окне на Отправить - форма отправляется администратору на почту
    public function actionSubmitsignup()
    {
        $model = new \app\models\SignupForm();
        $model->load(Yii::$app->request->post());

        if($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail']) && $model->contact(Yii::$app->params['additionalEmail'])) {

            //save the password
            $success=true;
            return json_encode($success);
        }
        else
        {
            return $this->renderPartial('signup', [
                'model' => $model,
            ]);
        }
    }
    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
	
    public function actionSay($message = 'Hello')
    {
        return $this->render('say', ['message' => $message]);
    }

    public function actionEntry()
    {
        $model = new EntryForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // valid data received in $model

            // do something meaningful here about $model ...

            return $this->render('entry-confirm', ['model' => $model]);
        } else {
            // either the page is initially displayed or there is some validation error
            return $this->render('entry', ['model' => $model]);
        }
    }
}
