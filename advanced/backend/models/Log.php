<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_log".
 *
 * @property integer $id
 * @property string $content
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
    public function rules()
    {
        return [
        [['content', 'staff_id', 'created_at'], 'required'],
        [['staff_id', 'created_at'], 'integer'],
        [['content'], 'string', 'max' => 255],
        [['content'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
        'id' => 'ID',
        'content' => 'Content',
        'staff_id' => 'Staff ID',
        'created_at' => 'Created At',
        ];
    }
    public function saveLog($table_name,$user_id,){
        $this->content = ""
    }
