<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comments`.
 */
class m180419_102028_create_comments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'name' => $this->string(55)->unique()->notNull(),
            'email' => $this->string(255),
            'comment' => $this->text()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('comments');
    }
}
