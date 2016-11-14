<?php

use yii\db\Migration;

class m161114_071116_khohang extends Migration
{
     public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tbl_khohang}}', [
            'id' => $this->primaryKey(),
            'id_dongho' => $this->string()->notNull()->unique(),
            'soluong' =>$this->integer()->notNull(),
            'log' =>$this->string()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%tbl_khohang}}');
    }
}
