<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;
use app\models\Article;
use app\models\Category;
class ArticlesController extends Controller
{
       

    public function actionArticles_list()
    {

        $data = Article::getAll(10);

        $popular = Article::getPopular();

        $recent = Article::getRecent();

        $categories = Category::getAll();

        return $this->render('articles_list',
            [
                'articles'=>$data['articles'],
                'pagination'=>$data['pagination'],
                'popular'=>$popular,
                'recent'=>$recent,
                'categories'=>$categories
            ]);
    }

    public function actionArticle($slug)
    {
        // $article = Article::findOne($id);
   // var_dump($slug);die;
        $article = Article::find()->where(['slug' => $slug])->limit(1)->one();
// var_dump($article);die;
        $popular = Article::getPopular();

        $recent = Article::getRecent();

        $categories = Category::getAll();

     
        // $this->createUrl('museums/view/1/best');
        return $this->render('article',[
            'article'=>$article,
            'popular'=>$popular,
            'recent'=>$recent,
            'categories'=>$categories,  
            ]);
    }
    
    // public function actionView($slug)
    // {
    //     $this->render('view',array(
    //         'model'=>$this->loadModelSlug($slug),
    //     ));
    // }

    public function loadModelSlug($slug)
    {
        $model = Product::model()->findByAttributes(array('slug'=>$slug));
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }


    public function actionCategory($id)
    {
               // build a DB query to get all articles with status = 1
            // var_dump($id);die;
            $category = Category::findOne($id);
            $data=Category::getArticlesByCategory($id);
            
            $popular = Article::getPopular();
            $recent = Article::getRecent();
            $categories = Category::getAll();

            // var_dump($category->title);die;

        return $this->render('category',[
            'articles'=>$data['articles'],
            'pagination'=>$data['pagination'],
            'popular'=>$popular,
            'recent'=>$recent,
            'category'=>$category,
            'categories'=>$categories
            ]);
    }

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