<?php

use yii\db\Migration;

/**
 * Handles the creation of table `employee`.
 */
class m180413_150016_create_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('employee', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(255)->notNull(),
            'last_name' => $this->string(255)->notNull(),
            'middle_name' => $this->string(255),
            'salary' => $this->float(),
            'email' => $this->string(255)->notNull()->unique(),
            'birth_date' => $this->string(11),
            'start_date' => $this->string(11)->notNull(),
            'city' => $this->integer(11)->defaultValue(0),
            'position' => $this->string(255)->notNull(),
            'id_code' => $this->string(11)->notNull()->unique(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('employee');
    }
}
