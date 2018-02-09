<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper; 
use yii\data\Pagination;
/**
 * This is the model class for table "article".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $date
 * @property string $image
 * @property integer $viewed
 * @property integer $user_id
 * @property integer $status
 * @property integer $category_id
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'],'required'],
            [['title','description','content'],'string'],
            [['date'],'date','format'=>'php:Y-m-d'],
            [['date'],'default','value'=>date('Y-m-d')],
            [['title'],'string','max'=>255],
            [['slug'],'string','max'=>255],
            [['metatitle'],'string','max'=>255],
            // [['slug, metatitle'],'string','max'=>255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'description' => 'Описание',
            'content' => 'Содержимое',
            'date' => 'Дата',
            'image' => 'Изображение',
            'viewed' => 'Просмотров',
            'user_id' => 'User ID',
            'status' => 'Статус',
            'category_id' => 'ID категории',
            'slug' => 'Slug',
            'metatitle' => 'Meta заголовок'
        ];
    }
    public function saveImage($fileName)
    {
        $this->image = $fileName;
        return $this ->save(false);

    }

    public function getImage()
    {
        if($this->image)
        {
            return '/upload/image/' . $this->image;
        }
        return '/upload/image/no-image.png';
    }

      public function deleteImage()
    {
         $imageUploadModel = new ImageUpload();
         $imageUploadModel->deleteCurrentImage($this->image);

    }

    public function beforeDelete()
    {
        $this->deleteImage();
        return parent::beforeDelete();
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
   
    public function saveCategory($category_id) 
    {
        $category = Category::findOne($category_id);
        if ($category!=null)
        {
            $this->link('category',$category);
             return true;
        }
    }

    public function getTags()
    {
        return $this->hasMany(Tag::className(), ['id' => 'tag_id'])
            ->viaTable('article_tag', ['article_id' => 'id']);
    }


    public function getSelectedTags()
    {
        $selectedTags = $this->getTags()->select('id')->asArray()->all();
        // return $this->hasOne(Category::className(), ['id' => 'category_id']);
        return ArrayHelper::getColumn($selectedTags,'id');
    }

    public function saveTags($tags) 
    {
        if(is_array($tags))
        {
            $this->clearCurrentTags();
         
            foreach($tags as $tag_id)
            {
                $tag = Tag::findOne($tag_id);
                  $this->link('tags',$tag);
            }

            return true;
          
        }
    }

      public function clearCurrentTags() 
      {
           ArticleTag::deleteAll(['article_id'=>$this->id]);
      }

      public function getDate()
      {
        return Yii::$app->formatter->asDate($this->date, 'dd-MM-yyyy');
      }

      public static function getAll($pageSize = 10)

      {
                // build a DB query to get all articles with status = 1
            $query = Article::find();

            // get the total number of articles (but do not fetch the article data yet)
            $count = $query->count();

            // create a pagination object with the total count
            $pagination = new Pagination(['totalCount' => $count,'pageSize'=>$pageSize]);

            // limit the query using the pagination and retrieve the articles
            $articles = $query->offset($pagination->offset)
                                ->limit($pagination->limit)
                                ->all();

            $data['articles']=$articles;
            $data['pagination']=$pagination;

            return $data;


      }

      public static function getPopular()
      {
        return Article::find()->orderBy('viewed desc')->limit(3)->all();
      }
      public static function getRecent()
      {
        return Article::find()->orderBy('date asc')->limit(4)->all();
      }
}
