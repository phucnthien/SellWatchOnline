<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Kieumay */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kieumay-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kieumay')->textInput(['maxlength' => true]) ?>

     <?= $form->field($model, 'status')->checkbox(); ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
