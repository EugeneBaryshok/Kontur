<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "seo_metapath".
 *
 * @property integer $id
 * @property string $path
 * @property string $title
 * @property string $description
 * @property string $keywords
 */
class SeoMetapath extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'seo_metapath';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['path', 'title', 'description', 'keywords'], 'required'],
            [['path', 'title', 'description', 'keywords'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'path' => 'Path',
            'title' => 'Title',
            'description' => 'Description',
            'keywords' => 'Keywords',
        ];
    }
}
