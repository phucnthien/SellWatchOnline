<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Kieudang */

$this->title = 'Thêm kiểu dáng';
$this->params['breadcrumbs'][] = ['label' => 'Kieudangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kieudang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
