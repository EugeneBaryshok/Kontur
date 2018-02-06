<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

$this->title = $article->title;

$this->params['breadcrumbs'][] = ['label' => 'Статьи', 'url' => ['/articles/articles_list']];
// $this->params['breadcrumbs'][] = Yii::$app->controller->substr_content($this->title, '90');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="main_block article-one">
    <div class="container">
        <div class="row">
         <h1 style="margin-bottom: 40px"><?= $article->title?></h1>
            <div class="col-md-8">
            
                <article class="article">
                    <div class="article-thumb">
                      <img class="article-main-img" src="<?= $article->getImage();?>" alt="">
                    </div>
                    <div class="article-content">
                      <!--   <header class="entry-header text-center text-uppercase">
                            <h6><a href="<?= Url::toRoute(['article/category','id'=>$article->category->id])?>"> <?= $article->category->title?></a></h6>

                            <h1 class="entry-title"><a href="<?= Url::toRoute(['article/view','id'=>$article->id])?>"><?= $article->title?></a></h1>


                        </header> -->
                        <div class="entry-content">
                            <?= $article->content?>
                        </div>
                       <!--  <div class="decoration">
                            <a href="#" class="btn btn-default">Decoration</a>
                            <a href="#" class="btn btn-default">Decoration</a>
                        </div> -->

                        <div class="social-share">
							<span
                                class="social-share-title pull-left text-capitalize">On <?= $article->getDate();?></span>
                           <!--  <ul class="text-center pull-right">
                                <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul> -->
                        </div>
                    </div>
                </article>

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