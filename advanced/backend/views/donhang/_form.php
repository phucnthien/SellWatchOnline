<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Donhang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="donhang-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'id_dongho')->textInput(['value' => 'hahaahh']) ?>

    <?= $form->field($model, 'soluong')->textInput() ?>

    <?= $form->field($model, 'customer_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customer_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customer_phone')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'payment_method')->textInput() ?>
    

    <?= $form->field($model, 'status')->textInput() ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
