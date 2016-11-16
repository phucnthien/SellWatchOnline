<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Dongho */

$this->title = 'Thêm sản phẩm';
$this->params['breadcrumbs'][] = ['label' => 'Donghos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dongho-create">

    <h1 style="color: black;"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
