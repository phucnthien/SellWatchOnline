<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_kieumay".
 *
 * @property integer $id
 * @property string $kieumay
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Kieumay extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_kieumay';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kieumay', 'created_at', 'updated_at'], 'required', 'message'=>'Không thể bỏ trống'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['kieumay'], 'string', 'max' => 255],
            [['kieumay'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kieumay' => 'Kiểu máy',
            'status' => 'Trạng thái',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
