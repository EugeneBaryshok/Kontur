<?php
use yii\helpers\Url;
?>
<div class="col-md-4" data-sticky_column>
    <div class="primary-sidebar">
        <aside class="widget border pos-padding side-category">
            <h3 class="widget-title text-uppercase text-center">Категории</h3>
            <ul>
                <?php foreach($categories as $category):?>
                    <li>
                        <a href="<?= Url::toRoute(['articles/category','slug'=>$category->slug]);?>"><?= $category->title?></a>
                        <span class="post-count pull-right"> (<?= $category->getArticlesCount();?>)</span>
                    </li>
                <?php endforeach;?>

            </ul>
        </aside>
        <aside class="widget side-popular">
            <h3 class="widget-title text-uppercase text-center ">Популярные статьи</h3>
            <?php
            foreach($popular as $article):?>
                <div class="popular-post">
                    <a href="<?= Url::toRoute(['articles/article','slug'=>$article->slug]);?>" class="popular-img"><img src="<?= $article->getImage();?>" alt="">

                        <!-- <div class="p-overlay"></div> -->
                    </a>

                    <div class="p-content">
                        <a href="<?= Url::toRoute(['articles/article','slug'=>$article->slug]);?>" class="text-uppercase"><?= $article->title?></a>
                        <span class="p-date"><?= $article->getDate();?></span>

                    </div>
                </div>
            <?php endforeach;?>

        </aside>
        <aside class="widget pos-padding side-recent">
            <h3 class="widget-title text-uppercase text-center ">Свежии статьи</h3>
            <?php foreach($recent as $article):?>
                <div class="thumb-latest-posts">
                    <div class="media">
                        <div class="media-left">
                            <a href="<?= Url::toRoute(['articles/article','slug'=>$article->slug]);?>" class="popular-img"><img src="<?= $article->getImage();?>" alt="">
                                <!-- <div class="p-overlay"></div> -->
                            </a>
                        </div>
                        <div class="p-content">
                            <a href="<?= Url::toRoute(['articles/article','slug'=>$article->slug]);?>" class="text-uppercase"><?= $article->title?></a>
                            <span class="p-date"><?= $article->getDate();?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </aside>
     
    </div>
</div>