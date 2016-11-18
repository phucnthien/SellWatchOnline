<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_log".
 *
 * @property integer $id
 * @property string $content
 * @property string $table_change
 * @property integer $staff_id
 * @property integer $created_at
 */
class Log extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_log';
    }

    /**
     * @inheritdoc
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'staff_id']);
    }
    public function rules()
    {
        return [
            [['content', 'table_change', 'staff_id', 'created_at'], 'required'],
            [['content'], 'string'],
            [['staff_id', 'created_at'], 'integer'],
            [['table_change'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => 'Nội dung',
            'table_change' => 'Bảng thay đổi',
            'staff_id' => 'Người thay đổi',
            'created_at' => 'Thời gian thay đổi',
        ];
    }
    
}
