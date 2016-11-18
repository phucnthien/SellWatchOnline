<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Log */

$this->title = "Log chi tiết";
$this->params['breadcrumbs'][] = ['label' => 'Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
	th
	{
		width: 150px;
	}
</style>
<div class="log-view table-responsive">

    <h1 style="color: black; margin-bottom: 50px;"><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
            [
                'label' => 'Người sửa',
                 'value' => $model->user->username
            ],
            'table_change',
            [
                'label' => 'Nội dung sửa',
                  
                'value' => htmlspecialchars_decode(str_replace(".", "<br/>", $model->content)),



            ]
            ,
            [
                'label' => 'Thời gian sửa',
                'value' => date('Y-m-d H:i:s', $model->created_at),
            ]
        ],
    ]) ?>

</div>
