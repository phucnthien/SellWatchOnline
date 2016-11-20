<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Thuonghieu;
use backend\models\Kieumay;
use backend\models\Kieudang;
/* @var $this yii\web\View */
/* @var $model backend\models\Dongho */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Donghos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dongho-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
            'confirm' => 'Are you sure you want to delete this item?',
            'method' => 'post',
            ],
            ]) ?>
        </p>
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


    ?>
    <?= DetailView::widget([
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
        ]) ?>

    </div>
