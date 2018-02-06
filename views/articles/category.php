<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;


$this->title = $category->title;
// $this->title = $article->category->title;
$this->params['breadcrumbs'][] = ['label' => 'Статьи', 'url' => ['/articles/articles_list']];
// $this->params['breadcrumbs'][] = ['label' => 'Озеленение', 'url' => ['/services/ozelen']];
// $this->params['breadcrumbs'][] = Yii::$app->controller->substr_content($this->title, '90');
$this->params['breadcrumbs'][] = $category->title;
?>
<!--main content start-->
<div class="main-content categories">
    <div class="container">
        <div class="row">
         <h1 style="margin-bottom: 40px"><?= $this->title?></h1>
            <div class="col-md-8">
                <?php
                foreach($articles as $article):?>
                    <article class="article article-list">
                    <div class="row">
                     
                        <div class="col-md-6">
                            <div class="article-thumb">
                                <a href="<?= Url::toRoute(['articles/article','id'=>$article->id]);?>"><img  class="article-main-img" src="<?= $article->getImage();?>" alt="" class="pull-left"></a>

                                <a href="<?= Url::toRoute(['articles/article','id'=>$article->id]);?>" class="article-thumb-overlay text-center">
                                    <div class="text-uppercase text-center">Читать далее</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="article-content">
                                <header class="entry-header text-uppercase">
                                    <h6><a href="<?= Url::toRoute(['articles/category','id'=>$article->category->id]);?>"> <?= $article->category->title?></a></h6>

                                    <h2 class="entry-title"><a href="<?= Url::toRoute(['articles/article','id'=>$article->id]);?>"><?= $article->title?></a></h2>
                                      
                                </header>
                                <div class="entry-content box">
                                <div>
                                    <p><?= $article->description?>
                                    </p>
                                   </div>

                                </div>
                                  <a  class="more" href="<?= Url::toRoute(['articles/article','id'=>$article->id]);?>">Читать далее</a>
                                <div class="social-share">
                                    <span class="social-share-title pull-left text-capitalize">On <?= $article->getDate();?></span>

                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <?php endforeach;?>

                <?php
                echo LinkPager::widget([
                    'pagination' => $pagination,
                ]);
                ?>
            </div>

            <?= $this->render('/layouts/sidebar',[
            	 'popular'=>$popular,
	            'recent'=>$recent,
	            'categories'=>$categories
            ])?>
        
        </div>
    </div>
</div>
<!-- end main content-->