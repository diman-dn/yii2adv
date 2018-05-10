<?php

use yii\db\Migration;

/**
 * Class m180510_111224_add_index_news_content
 */
class m180510_111224_add_index_news_content extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("alter table `news` add fulltext index idx_content (content)");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('idx_content', 'news');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180510_111224_add_index_news_content cannot be reverted.\n";

        return false;
    }
    */
}
