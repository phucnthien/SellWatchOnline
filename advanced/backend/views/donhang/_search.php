<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DonhangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="donhang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'madonhang') ?>

    <?= $form->field($model, 'id_dongho') ?>

    <?= $form->field($model, 'soluong') ?>

    <?= $form->field($model, 'customer_name') ?>

    <?php // echo $form->field($model, 'customer_address') ?>

    <?php // echo $form->field($model, 'customer_phone') ?>

    <?php // echo $form->field($model, 'payment_method') ?>

    <?php // echo $form->field($model, 'staff_create_id') ?>

    <?php // echo $form->field($model, 'deliverer_name') ?>

    <?php // echo $form->field($model, 'staff_export_id') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'deliver_at') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
