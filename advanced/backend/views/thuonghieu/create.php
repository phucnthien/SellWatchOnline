<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Thuonghieu */

$this->title = 'Thêm thương hiệu';
$this->params['breadcrumbs'][] = ['label' => 'Thuonghieus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thuonghieu-create">

    <h1 style="color:black;"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
