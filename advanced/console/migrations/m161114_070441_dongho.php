<?php

use yii\db\Migration;

class m161114_070441_dongho extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tbl_dongho}}', [
            'id' => $this->primaryKey(),
            'masp' => $this->string()->notNull()->unique(),
            'tensp' => $this->string()->notNull(),
            'mota' => $this->string()->notNull(),
            'xuatxu' => $this->string(),
            'brand_id' => $this->integer()->notNull(),
            'id_kieumay' => $this->integer()->notNull(),
            'id_kieudang' => $this->integer()->notNull(),
            'loaikinh' => $this->string(),
            'loaiday' => $this->string(),
            'loaivo' => $this->string(),
            'duongkinh' => $this->string(),
            'doday' => $this->string(),
            'dochiunuoc' => $this->string(),
            'tinhnangkhac' => $this->string(),
            'giaban' => $this->string(),
            'gianhap' => $this->string(),
            'status' =>$this->integer()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%tbl_dongho}}');
    }
}
