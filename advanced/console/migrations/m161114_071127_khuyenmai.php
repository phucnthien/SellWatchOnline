<?php

use yii\db\Migration;

class m161114_071127_khuyenmai extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tbl_khuyenmai}}', [
            'id' => $this->primaryKey(),
            'id_dongho' =>$this->integer()->notNull(),
            'sale_off_price' =>$this->integer()->notNull(),
            'start_at' => $this->integer()->notNull(),
            'end_at' => $this->integer()->notNull(),
             'status' =>$this->integer()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%tbl_khuyenmai}}');
    }
}
