<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;
use backend\models\Thuonghieu;
use backend\models\Kieumay;
use backend\models\Kieudang;
/* @var $this yii\web\View */
/* @var $model backend\models\DonghoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dongho-search">

    <?php $form = ActiveForm::begin([
        'action' => ['search'],
        'method' => 'get',
        ]); ?>
        <div class="form-group">

            <label for="masp">Nhập mã sản phẩm cần tìm</label>
            <input type="text" id ="masp" class="form-control" name="productCode" style="margin-top: 20px; margin-bottom: 20px;">
            <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>
        
        
        <?php ActiveForm::end(); ?>
        <?php 
        function checkStatus($model){
          switch ($model->status) {
            case '1':
            return 'Sẵn hàng';
                            # code...
            break;
            case '2':
            return 'Hết hàng';
                            # code...
            break;
            case '0':
            return 'Chưa về';
                        # code...
            break;

        }
    }
    if (isset($model)) {


        echo DetailView::widget([
            'model' => $model,
            'attributes' => [
            'id',
            'masp',
            'tensp',
            'mota',
            'xuatxu',
            [
            'label'=>'Nhãn hiệu',
            'value' => Thuonghieu::find()->select(['brand'])->where(['id' => $model->brand_id])->column()[0],

            ],
            [
            'label'=>'Kiểu máy',
            'value' => Kieumay::find()->select(['kieumay'])->where(['id' => $model->id_kieumay])->column()[0],

            ],
            [
            'label'=>'Kiểu dáng',
            'value' => Kieudang::find()->select(['kieudang'])->where(['id' => $model->id_kieudang])->column()[0],

            ],

            'loaikinh',
            'loaiday',
            'loaivo',
            'duongkinh',
            'doday',
            'dochiunuoc',
            'tinhnangkhac',
            'giaban',
            'gianhap',

            [
            'label' => 'Trạng thái',
            'value' => checkStatus($model)


            ],
            [
            'label' => 'Thời gian tạo',
            'value' => date('Y-m-d H:i:s',$model->created_at)
            ]
            ,
            [
            'label' => 'Thời gian cập nhật',
            'value' => date('Y-m-d H:i:s',$model->updated_at)
            ]
            ],
            ]);




                //# code...
    }
    if (isset($error)) {

                # code...
        echo '<div class="alert alert-danger">Không tìm thấy sản phẩm nào.</div>';
    }

    ?>


</div>
