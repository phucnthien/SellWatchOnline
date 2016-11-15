<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DonghoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Donghos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dongho-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dongho', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'masp',
            'tensp',
            'mota',
            'xuatxu',
            // 'brand_id',
            // 'id_kieumay',
            // 'id_kieudang',
            // 'loaikinh',
            // 'loaiday',
            // 'loaivo',
            // 'duongkinh',
            // 'doday',
            // 'dochiunuoc',
            // 'tinhnangkhac',
            // 'giaban',
            // 'gianhap',
            // 'status',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
