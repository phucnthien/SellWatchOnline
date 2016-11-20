<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DonhangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Donhangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donhang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Donhang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'madonhang',
            'id_dongho',
            'soluong',
            'customer_name',
            // 'customer_address',
            // 'customer_phone',
            // 'payment_method',
            // 'staff_create_id',
            // 'deliverer_name',
            // 'staff_export_id',
            // 'status',
            // 'deliver_at',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
