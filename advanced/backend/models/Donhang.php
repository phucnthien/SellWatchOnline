<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_donhang".
 *
 * @property integer $id
 * @property integer $madonhang
 * @property integer $id_dongho
 * @property integer $soluong
 * @property string $customer_name
 * @property string $customer_address
 * @property string $customer_phone
 * @property integer $payment_method
 * @property integer $staff_create_id
 * @property string $deliverer_name
 * @property string $staff_export_id
 * @property integer $status
 * @property integer $deliver_at
 * @property integer $created_at
 * @property integer $updated_at
 */
class Donhang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_donhang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['madonhang', 'id_dongho', 'soluong', 'payment_method', 'staff_create_id', 'status', 'created_at', 'updated_at'], 'required', 'message'=>'{attribute} không được để trống'],
            [['madonhang', 'id_dongho', 'soluong', 'payment_method', 'staff_create_id', 'status', 'delivered_at', 'created_at', 'updated_at'], 'integer'],
            [['more_info'], 'string'],
            [['customer_name', 'customer_address', 'customer_phone', 'deliverer_name', 'staff_export_id'], 'string', 'max' => 255],
            [['madonhang'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            //'id' => 'ID',
            'madonhang' => 'Mã đơn hàng',
           // 'id_dongho' => 'Id Dongho',
            'soluong' => 'Số lượng',
            'customer_name' => 'Tên khách hàng',
            'customer_address' => 'Địa chỉ khách hàng',
            'customer_phone' => 'Số điện thoại khách hàng',
            'payment_method' => 'Phương thức thanh toán',
            'staff_create_id' => 'Người lập đơn',
            'deliverer_name' => 'Deliverer Name',
            'more_info' => 'Ghi chú',
            // 'staff_export_id' => 'Staff Export ID',
            'status' => 'Trạng thái',
            // 'deliver_at' => 'Deliver At',
            // 'created_at' => 'Created At',
            // 'updated_at' => 'Updated At',
        ];
    }
}
