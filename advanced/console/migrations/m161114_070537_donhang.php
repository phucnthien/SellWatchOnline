<?php

use yii\db\Migration;

class m161114_070537_donhang extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tbl_donhang}}', [
            'id' => $this->primaryKey(),
            'madonhang' => $this->integer()->notNull()->unique(),
            'id_dongho' => $this->integer()->notNull(),
            'soluong' => $this->integer()->notNull(),
            'customer_name' => $this->string(),
            'customer_address' => $this->string(),
            'customer_phone' => $this->string(),
            'payment_method' => $this->integer()->notNull(),
            'staff_create_id' => $this->integer()->notNull(),
            'deliverer_name' => $this->string(),
            'staff_export_id' => $this->string(),
            'status' =>$this->integer()->notNull(),
            'delivered_at' => $this->integer(),
            'more_info' => $this->text(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%tbl_donhang}}');
    }
}
