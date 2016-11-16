<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_kieudang".
 *
 * @property integer $id
 * @property string $kieudang
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Kieudang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_kieudang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kieudang', 'created_at', 'updated_at'], 'required', 'message'=>'Không được để trống'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['kieudang'], 'string', 'max' => 255],
            [['kieudang'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kieudang' => 'Kiểu dáng',
            'status' => 'Trạng thái',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
