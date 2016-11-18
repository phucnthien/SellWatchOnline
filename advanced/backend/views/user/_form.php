<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use backend\models\UserLevel;
/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'display_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telephone')->textInput(['maxlength' => true]) ?>
     <?= $form->field($model, 'password')->passwordInput() ?>

    <?= $form->field($model, 'level_id')->dropdownList(UserLevel::find()->select(['level_name', 'id'])->indexBy('id')->column(),['prompt'=>'Chọn cấp độ'])?>

     <?= $form->field($model, 'status')->dropdownList(['10' => 'Kích hoạt', '0' => 'Không kích hoạt'],['prompt'=>'Trạng thái'])?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Tạo nhân viên' : 'Cập nhật nhân viên', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
