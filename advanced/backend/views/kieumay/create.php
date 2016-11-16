<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Kieumay */

$this->title = 'Thêm kiểu máy';
$this->params['breadcrumbs'][] = ['label' => 'Kieumays', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kieumay-create">

    <h1 style="color:black;"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
