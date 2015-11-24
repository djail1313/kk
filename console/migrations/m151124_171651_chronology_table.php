<?php

use yii\db\Schema;
use yii\db\Migration;

class m151124_171651_chronology_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%chronology}}', [
            'id' => $this->primaryKey(),
            'chronology_date' => $this->integer()->notNull(),
            'place' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%chronology}}');
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
