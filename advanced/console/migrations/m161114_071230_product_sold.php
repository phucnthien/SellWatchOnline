<?php

use yii\db\Migration;

class m161114_071230_product_sold extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tbl_product_sold}}', [
            'id' => $this->primaryKey(),
            
            'id_dongho' =>$this->integer()->notNull(),
            'staff_sold_id' =>$this->integer()->notNull(),
            'giaban' =>$this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%tbl_product_sold}}');
    }
}
