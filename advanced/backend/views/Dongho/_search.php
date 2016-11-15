<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DonghoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dongho-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'masp') ?>

    <?= $form->field($model, 'tensp') ?>

    <?= $form->field($model, 'mota') ?>

    <?= $form->field($model, 'xuatxu') ?>

    <?php // echo $form->field($model, 'brand_id') ?>

    <?php // echo $form->field($model, 'id_kieumay') ?>

    <?php // echo $form->field($model, 'id_kieudang') ?>

    <?php // echo $form->field($model, 'loaikinh') ?>

    <?php // echo $form->field($model, 'loaiday') ?>

    <?php // echo $form->field($model, 'loaivo') ?>

    <?php // echo $form->field($model, 'duongkinh') ?>

    <?php // echo $form->field($model, 'doday') ?>

    <?php // echo $form->field($model, 'dochiunuoc') ?>

    <?php // echo $form->field($model, 'tinhnangkhac') ?>

    <?php // echo $form->field($model, 'giaban') ?>

    <?php // echo $form->field($model, 'gianhap') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
