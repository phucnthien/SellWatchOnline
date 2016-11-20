<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DonghoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Donghos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dongho-index table-responsive">

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

           
    
            [
                'label' => 'Mã sản phẩm',
                'value' => function($data){
                    return $data->masp;
                }
            ],

            [
                'label' => 'Tên sản phẩm',
                'value' => function($data){
                    return $data->tensp;
                }
            ],

            [
                'label' => 'Mã sản phẩm',
                'value' => function($data){
                    return $data->giaban;
                }
            ],

            [
                'label' => 'Xuất xứ',
                'value' => function($data){
                    return $data->xuatxu;
                }
            ],
        
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Actions'
            ],
        ],
    ]); ?>
</div>
