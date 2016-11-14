<?php

use yii\db\Migration;

class m161114_070945_khoanggia extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tbl_khoanggia}}', [
            'id' => $this->primaryKey(),
            'ten_khoanggia' => $this->string()->notNull()->unique(),
            'giamin' =>$this->integer()->notNull(),
            'giamax' =>$this->integer()->notNull(),
             'status' =>$this->integer()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%tbl_khoanggia}}');
    }
}
