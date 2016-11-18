<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\UserLevel */

$this->title = 'Tạo cấp bậc nhân viên';
$this->params['breadcrumbs'][] = ['label' => 'User Levels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-level-create">

    <h1 style="color: black;"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
