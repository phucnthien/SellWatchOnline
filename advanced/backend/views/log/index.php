<?php

use yii\helpers\Html;
use yii\grid\GridView;
use \yii\web\Request;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\LogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Logs';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>


</style>
<div class="log-index table-responsive">
   
            <h1 style="color: black;"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]);

      // echo "<pre>";
      //    print_r( $dataProvider);
      //   die();
      // echo "<pre>";
      //   print_r( $dataProvider);
      //   die();
    ?>

    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,

        'columns' => [
        ['class' => 'yii\grid\SerialColumn' 

        ],





        'user.username' =>[

        'label'=>'Người sửa',
        'format' => 'raw',
        'value'=>function ($data) {
            return  Html::a($data->user->username, 'facebook.com');;
        },
        ],

        'table_change' =>[

        'label'=>'Bảng thay đổi',
        'format' => 'raw',
        'value'=>function ($data) {
            return $data->table_change;
        },
        ],
        'content' =>[

        'label'=>'Nội dung sửa',
        'format' => 'raw',
        'value'=>function ($data) {

            return  substr($data->content,0, 70) .'... '. Html::a( 'xem chi tiết', Yii::$app->homeUrl.'log/view?id='. $data->id);;
        },
        ],
        'created_at'=>[

        'label'=>'Thời gian sửa',
        'format' => 'raw',
        'value'=>function ($data) {
            return  date('Y-m-d H:i:s', $data->created_at);
        },
        ],

        ],
        ]); ?>
   
</div>