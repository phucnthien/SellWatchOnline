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

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">COMPANY NAMEaaaaaaaaa</a>
            </div>

            <div class="header-right">

                <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                Jhon Deo Alex
                                <br />
                                <small>Last Login : 2 Weeks Ago </small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="index.html"><i class="fa fa-dashboard "></i>QUẢN LÝ SẢN PHẨM</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-plus "></i>Danh sách sản phẩm</a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-comments-o "></i>Tìm sản phẩm</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-comments-o "></i>Danh sách thương hiệu</a>
                    </li>
                    

                    <li>
                        <a href="#"><i class="fa fa-comments-o "></i>Danh sách sản phẩm khuyến mại</a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-comments-o "></i>Danh sách sản phẩm nổi bật</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-comments-o "></i>Danh sách sản phẩm banner</a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-comments-o "></i>Danh sách kiểu dáng</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-comments-o "></i>Danh sách kiểu máy</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
           <?= $content ?>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    




    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
