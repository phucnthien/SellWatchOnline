<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Dongho */

$this->title = 'Create Dongho';
$this->params['breadcrumbs'][] = ['label' => 'Donghos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dongho-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
