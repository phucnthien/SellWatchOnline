<?php

use yii\db\Migration;

class m161114_071158_log extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tbl_log}}', [
            'id' => $this->primaryKey(),
            'content' => $this->text()->notNull(),
            'table_change' => $this->string()->notNull(),
            'staff_id' =>$this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%tbl_log}}');
    }
}
