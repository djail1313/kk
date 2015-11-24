<?php

use yii\db\Schema;
use yii\db\Migration;

class m151124_170424_agenda_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%agenda}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'agenda_date' => $this->integer()->notNull(),
            'place' => $this->string()->notNull(),
            'result' => $this->text()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%agenda}}');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
