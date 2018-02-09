<?php

use yii\db\Migration;

/**
 * Handles adding slug to table `article`.
 */
class m180207_071012_add_slug_column_to_article_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('article', 'slug', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('article', 'slug');
    }
}
