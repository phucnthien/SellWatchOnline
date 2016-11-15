<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    #brand
    {
        display:inline-block; 
        color: #fff; 
        margin-left:0px;
    }
    .label_remember
    {
         display:inline-block; 
         color: #fff;  
         margin-left:20px;
    }
</style>
<div class="main-agile">
        <h1>SELL WATCH ONLINE</h1>
        <div id="w3ls_form" class="signin-form">
            <!-- Sign In Form -->
            <?php $form = ActiveForm::begin(['id' => 'login-form',
                'options' => [
                            'style' => 'margin:auto; position:relative;',

                ]




            ]); ?>
               
                <h2>ĐĂNG NHẬP</h2>
                <p>User Name </p>
                <?= $form->field($model, 'username')->textInput(['autofocus' => true,'style'=>'width:100%; padding: .4em 1em;'])->label(false) ?>
                <p>Password</p>
                 <?= $form->field($model, 'password')->passwordInput(['style'=>'width:100%; padding: .4em 1em;'])->label(false) ?>  
                <?= $form->field($model, 'rememberMe')->checkbox(['id'=>'brand'])->label(false)?>
                <label for="brand" class="label_remember"><span></span> Remember me ?</label> 
                <input type="submit" value="SIGN IN" style="margin-top: 20px; ">
                
             
            <?php ActiveForm::end(); ?>
            <!-- //Sign In Form -->
            <!-- Sign up Form-->
           
            <!-- Sign up Form-->
        </div>
        <!-- copyright -->
        
        <!-- //copyright -->  
    </div>  