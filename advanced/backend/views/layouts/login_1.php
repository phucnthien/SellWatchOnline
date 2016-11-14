<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">


    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

            <div class="panel-body">
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <hr />
                <h5>Enter Details to Login</h5>
                <br />
                <div class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Your Username', 'class'=> 'form-control'])->label(false) ?>
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                    <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Your Password', 'class'=> 'form-control' ])->label(false) ?>
                </div>
                <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" /> Remember me
                    </label>
                    <span class="pull-right">
                     <a href="index.html" >Forget password ? </a> 
                 </span>
             </div>

             <a href="index.html" class="btn btn-primary ">Login Now</a>
             <hr />

             <?php ActiveForm::end(); ?>
         </div>

     </div>

 </div>

</div>
