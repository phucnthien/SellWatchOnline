<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>
<body>
	<?php $this->beginBody() ?>
	<div class="main-agile">
		<h1>Modern Flip Sign In Form</h1>
		<div id="w3ls_form" class="signin-form">
			<!-- Sign In Form -->
			<form id="signin" action="#" method="post">
				<div class="ribbon"><a href="#" id="flipToRecover" class="flipLink" title="Click Here to SignUp">Sign Up</a></div>
				<h2>Sign In Form</h2>
				<p>User Name </p>
				<input type="text" name="User Name" placeholder="" required=""/>
				<p>Password</p>
				<input type="password" name="Password" placeholder="" required=""/>	 
				<input type="checkbox" id="brand" value="">
				<label for="brand"><span></span> Remember me ?</label> 
				<input type="submit" value="SIGN IN">
				
			</form>
			<!-- //Sign In Form -->
			
			<!-- Sign up Form-->
		</div>
		<!-- copyright -->
		<div class="copyright">
			<p> © 2016 Modern Flip Sign In Form . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
		</div>
		<!-- //copyright -->  
	</div>	



	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
