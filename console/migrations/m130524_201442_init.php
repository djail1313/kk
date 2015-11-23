<?php

use yii\db\Schema;
use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'name' => $this->string()->notNull(),
            'phone' => $this->string()->unique(),
            'identity_no' => $this->string()->unique(),
            'identity_type' => "ENUM('KTP','SIM','PASSPORT') DEFAULT 'KTP'",
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'active_token' => $this->string()->notNull(),
            'auth_key' => $this->string(32)->notNull(),
            'is_verified' => $this->boolean()->defaultValue(FALSE),
            'last_login' => $this->integer(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'group_id' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
