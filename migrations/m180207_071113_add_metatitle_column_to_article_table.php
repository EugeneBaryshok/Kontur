<?php

use yii\db\Migration;

/**
 * Handles adding metatitle to table `article`.
 */
class m180207_071113_add_metatitle_column_to_article_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('article', 'metatitle', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('article', 'metatitle');
    }
}
