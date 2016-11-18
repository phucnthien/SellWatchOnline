<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

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
            'username',
            'display_name',
         
            'email:email',
            'telephone',
            [
                'label' => 'Cấp bậc',
                'value' => $model->level->level_name

            ],
           
            [
                'label' => 'Ngày tạo',
                'value' => date('Y-m-d H:i:s', $model->created_at)

            ],

            
             [
                'label' => 'Ngày cập nhật',
                'value' => date('Y-m-d H:i:s', $model->updated_at)

            ],

             [
                'label' => 'Trạng thái',
                'value' =>  $model->status == 10 ? 'Đã kích hoạt' : 'Không kích hoạt'

            ],
        ],
    ]) ?>

</div>
