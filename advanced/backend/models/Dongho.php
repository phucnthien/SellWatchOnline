<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_dongho".
 *
 * @property integer $id
 * @property string $masp
 * @property string $tensp
 * @property string $mota
 * @property string $xuatxu
 * @property integer $brand_id
 * @property integer $id_kieumay
 * @property integer $id_kieudang
 * @property string $loaikinh
 * @property string $loaiday
 * @property string $loaivo
 * @property string $duongkinh
 * @property string $doday
 * @property string $dochiunuoc
 * @property string $tinhnangkhac
 * @property string $giaban
 * @property string $gianhap
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Dongho extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_dongho';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['masp', 'tensp', 'mota', 'brand_id', 'id_kieumay', 'id_kieudang', 'created_at', 'updated_at'], 'required'],
            [['brand_id', 'id_kieumay', 'id_kieudang', 'status', 'created_at', 'updated_at'], 'integer'],
            [['masp', 'tensp', 'mota', 'xuatxu', 'loaikinh', 'loaiday', 'loaivo', 'duongkinh', 'doday', 'dochiunuoc', 'tinhnangkhac', 'giaban', 'gianhap'], 'string', 'max' => 255],
            [['masp'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'masp' => 'Masp',
            'tensp' => 'Tensp',
            'mota' => 'Mota',
            'xuatxu' => 'Xuatxu',
            'brand_id' => 'Brand ID',
            'id_kieumay' => 'Id Kieumay',
            'id_kieudang' => 'Id Kieudang',
            'loaikinh' => 'Loaikinh',
            'loaiday' => 'Loaiday',
            'loaivo' => 'Loaivo',
            'duongkinh' => 'Duongkinh',
            'doday' => 'Doday',
            'dochiunuoc' => 'Dochiunuoc',
            'tinhnangkhac' => 'Tinhnangkhac',
            'giaban' => 'Giaban',
            'gianhap' => 'Gianhap',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
