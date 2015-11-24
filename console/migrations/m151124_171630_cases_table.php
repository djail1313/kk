<?php

use yii\db\Schema;
use yii\db\Migration;

class m151124_171630_cases_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%cases}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'case_date' => $this->integer()->notNull(),
            'case_type_id' => $this->integer()->notNull(),
            'agency_id' => $this->integer()->notNull(),
            'subject_id' => $this->integer()->notNull(),
            'chronology_id' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%cases}}');
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
