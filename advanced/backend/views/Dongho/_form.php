<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Thuonghieu;
use backend\models\Kieumay;
use backend\models\Kieudang;
/* @var $this yii\web\View */
/* @var $model backend\models\Dongho */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dongho-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'masp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tensp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'xuatxu')->textInput(['maxlength' => true]) ?>

    <?=$form->field($model, 'brand_id')->dropdownList(Thuonghieu::find()->select(['brand', 'id'])->indexBy('id')->column(),['prompt'=>'Chọn nhãn hiệu'])?>

     <?=$form->field($model, 'id_kieumay')->dropdownList(Kieumay::find()->select(['kieumay', 'id'])->indexBy('id')->column(),['prompt'=>'Chọn kiểu máy'])?>

    <?=$form->field($model, 'id_kieudang')->dropdownList(Kieudang::find()->select(['kieudang', 'id'])->indexBy('id')->column(),['prompt'=>'Chọn kiểu dáng'])?>


    <?= $form->field($model, 'loaikinh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'loaiday')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'loaivo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duongkinh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doday')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dochiunuoc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tinhnangkhac')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'giaban')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gianhap')->textInput(['maxlength' => true]) ?>

    <?=$form->field($model, 'status')->dropdownList(['1' => 'Sẵn hàng', '2' => 'Hết hàng', '0' => 'Chưa về'],['prompt'=>'Nhập trạng thái'])?>
  

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Thêm sản phẩm' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'style'=>'margin-left:650px']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
