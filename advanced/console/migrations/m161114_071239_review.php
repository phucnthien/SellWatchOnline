<?php

use yii\db\Migration;

class m161114_071239_review extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tbl_review}}', [
            'id' => $this->primaryKey(),
            'review_content' => $this->string(),
            'product_id' =>$this->integer()->notNull(),
            'star_number' =>$this->integer()->notNull(),
            'customer_name' =>$this->string()->notNull(),
            'status' =>$this->integer()->notNull()->defaultValue(1),
            
            'created_at' => $this->integer()->notNull(),
            
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%tbl_review}}');
    }
}
