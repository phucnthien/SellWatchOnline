<?php

namespace backend\models;
use backend\models\User;
use Yii;

/**
 * This is the model class for table "tbl_level".
 *
 * @property integer $id
 * @property string $level_name
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class UserLevel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_level';
    }
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['level_id' => 'id']);
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['level_name', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['level_name'], 'string', 'max' => 255],
            [['level_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'level_name' => 'Tên cấp bậc',
            'status' => 'Trạng thái',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
