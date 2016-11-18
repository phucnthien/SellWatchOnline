<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .summary
    {
        
        margin-top: 20px;
         margin-bottom: 20px;
    }
    .page
    {
        width: 200px;
        display: inline-block;
    }
</style>
<div class="user-index table-responsive">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 



    ?>

    <p>
        <?= Html::a('Thêm nhân viên', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,

        'layout' => "{summary}\n{items}\n<div align='center'>{pager}</div>",
         'summary' => "<div class= 'summary'>Hiển thị {begin} -  {end} của {totalCount} nhân viên </div>",
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            [
                'label' => 'Tên đăng nhập',
                'value' =>  function($data){ return $data->username; },
            ],
            [
                'label' => 'Tên hiển thị',
                'value' =>  function($data){ return $data->display_name; },
            ],
        
           
            'level.level_name',
            [
                'label' => 'Ngày tạo',
                'value' =>  function($data){ return date('Y-m-d H:i:s', $data->created_at); },
            ],

             [
                'label' => 'Ngày cập nhật',
                'value' =>  function($data){ return date('Y-m-d H:i:s', $data->updated_at); },
            ],

            [
                'label' => 'Trạng thái',
                'value' =>  function($data){ return $data->status == 10 ? 'Đã kích hoạt' : 'Không kích hoạt' ; },
            ],
            ['class' => 'yii\grid\ActionColumn', 
                'header' => 'Actions'

            ],
        ],
    ]); ?>
</div>
