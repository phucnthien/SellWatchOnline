<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_thuonghieu".
 *
 * @property integer $id
 * @property string $brand
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Thuonghieu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_thuonghieu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['brand', 'created_at', 'updated_at'], 'required', 'message'=>'Không được để trống'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['brand'], 'string', 'max' => 255],
            [['brand'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'brand' => 'Thương hiệu',
            'status' => 'Trạng thái',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
