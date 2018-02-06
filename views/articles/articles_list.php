<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

$this->title = 'Список статей';

// $this->params['breadcrumbs'][] = ['label' => 'Озеленение', 'url' => ['/services/ozelen']];
// $this->params['breadcrumbs'][] = Yii::$app->controller->substr_content($this->title, '90');
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- <div class="introduction">
    <div class="container">
       
		  <hr class="hr" align="left">
		
			
	</div>
</div> -->
<div class="main_block article_list">
	<div class="container">
	 <h1 style="margin-bottom: 40px">Список <span class="green">статей</span></h1>
		<div class="row">
	 		<div class="col-md-8">
	 		
				<?php foreach($articles as $article):?>
					 <article class="article">
                        <div class="article-thumb">
                            <a href="<?= Url::toRoute(['articles/article', 'id'=>$article->id]);?>"><img class="article-main-img" src="<?= $article->getImage();?>" alt=""></a>

                            <a href="<?= Url::toRoute(['articles/article', 'id'=>$article->id]);?>" class="article-thumb-overlay text-center">
                                <div class="text-uppercase text-center">Читать далее</div>
                            </a>
                        </div>
                        <div class="article-content">
                            <header class="entry-header text-center text-uppercase">
                                <h6><a href="<?= Url::toRoute(['articles/category','id'=>$article->category->id])?>"> <?= $article->category->title; ?></a></h6>

                                <h2 class="entry-title"><a href="<?= Url::toRoute(['articles/article', 'id'=>$article->id]);?>"><?= $article->title?></a></h2>
                                <div class="divider divider-1"></div>


                            </header>
                            <div class="entry-content">
                                <p><?= $article->description?>
                                </p>

                                <div class="btn-continue-reading text-center text-uppercase">
                                    <a href="<?= Url::toRoute(['articles/article', 'id'=>$article->id]);?>" class="more-link">Читать далее</a>
                                </div>
                            </div>
                            <div class="social-share">
                               <span class="social-share-title pull-left text-capitalize"><?= $article->getDate();?></span>
                               <!--  <ul class="text-center pull-right">
                                    <li><a class="s-facebook" href="#"><i class="fa fa-eye"></i></a></li><?= (int) $article->viewed?>
                                </ul> -->
                            </div>
                        </div>
                    </article>
				<?php endforeach; ?>



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