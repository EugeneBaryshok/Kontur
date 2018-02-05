<?php

namespace app\models;
use Yii;
use yii\helpers\Url;
use yii\db\ActiveRecord;

class Country extends ActiveRecord
{
    public function Seo()
    {
        $url = Url::to();
        $post = Yii::$app->db->createCommand('SELECT * FROM seo_metapath WHERE path=' . '\'' . $url . '\'')
            ->queryOne();

        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $post["description"],
            

        ]);
 \Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => $post["keywords"],

        ]);


    }
}