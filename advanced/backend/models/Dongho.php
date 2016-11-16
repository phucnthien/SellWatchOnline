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
            [['masp', 'tensp', 'mota', 'brand_id', 'id_kieumay', 'id_kieudang', 'created_at', 'updated_at'], 'required','message'=>'Không thể để trống'],
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
            'masp' => 'Mã sản phẩm',
            'tensp' => 'Tên sản phẩm',
            'mota' => 'Mô tả ',
            'xuatxu' => 'Xuất xứ',
            'brand_id' => 'Nhãn hiệu',
            'id_kieumay' => 'Kiểu máy',
            'id_kieudang' => 'Kiểu dáng',
            'loaikinh' => 'Loại kính',
            'loaiday' => 'Loại dây',
            'loaivo' => 'Loại vỏ',
            'duongkinh' => 'Đường kính',
            'doday' => 'Độ dày',
            'dochiunuoc' => 'Độ chịu nước',
            'tinhnangkhac' => 'Tính năng khác',
            'giaban' => 'Giá bán',
            'gianhap' => 'Giá nhập',
            'status' => 'Trạng thái',
            // 'created_at' => 'Created At',
            // 'updated_at' => 'Updated At',
        ];
    }
}
