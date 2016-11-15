<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

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

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'masp',
            'tensp',
            'mota',
            'xuatxu',
            'brand_id',
            'id_kieumay',
            'id_kieudang',
            'loaikinh',
            'loaiday',
            'loaivo',
            'duongkinh',
            'doday',
            'dochiunuoc',
            'tinhnangkhac',
            'giaban',
            'gianhap',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
