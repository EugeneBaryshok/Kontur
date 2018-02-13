<?php

use yii\db\Migration;

/**
 * Handles adding metadescription to table `article`.
 */
class m180213_082311_add_metadescription_column_to_article_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('article', 'metadescription', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('article', 'metadescription');
    }
}
