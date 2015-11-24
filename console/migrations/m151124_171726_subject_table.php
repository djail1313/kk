<?php

use yii\db\Schema;
use yii\db\Migration;

class m151124_171726_subject_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%subject}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'position' => $this->string()->notNull(),
            'nominal' => $this->double()->notNull(),
            'shortfall_penalty' => $this->integer()->notNull(),
            'penalty' => $this->double()->notNull(),
            'disenfranchisement' => $this->text()->notNull(),
            'progress_id' => $this->integer()->notNull(),
            'agenda_id' => $this->integer()->notNull(),
            'status_id' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%subject}}');
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
