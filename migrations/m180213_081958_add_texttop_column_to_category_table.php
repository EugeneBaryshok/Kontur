<?php

use yii\db\Migration;

/**
 * Handles adding texttop to table `category`.
 */
class m180213_081958_add_texttop_column_to_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('category', 'texttop', $this->string());
        $this->addColumn('category', 'textbottom', $this->string());
        $this->addColumn('category', 'slug', $this->string());
        $this->addColumn('category', 'metatitle', $this->string());
        $this->addColumn('category', 'metadescription', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('category', 'texttop');
        $this->dropColumn('category', 'textbottom');
        $this->dropColumn('category', 'slug');
        $this->dropColumn('category', 'metatitle');
        $this->dropColumn('category', 'metadescription');
    }
}
