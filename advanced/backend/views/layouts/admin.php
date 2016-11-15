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
                <a class="navbar-brand" href="index.html">COMPANY NAME</a>
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
                        <a class="active-menu" href="index.html"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Quản lý bán hàng </span></a>

                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Quản lý sản phẩm </span></a>

                    </li>
                    <li>
                        <a href="#"><i class="fa fa-yelp "></i>Quản lý danh mục <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="invoice.html"><i class="fa fa-coffee"></i>Danh sách danh mục</a>
                            </li>
                            <li>
                                <a href="invoice.html"><i class="fa fa-coffee"></i>Thêm danh mục</a>
                            </li>
                            <li>
                                <a href="pricing.html"><i class="fa fa-flash "></i>Sửa khoảng giá</a>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bicycle "></i>Quản lý kho hàng</span></a>

                    </li>
                    <li>
                        <a href="#"><i class="fa fa-yelp "></i>Quản lý nhân viên<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="invoice.html"><i class="fa fa-coffee"></i>Danh sách nhân viên</a>
                            </li>
                            <li>
                                <a href="invoice.html"><i class="fa fa-coffee"></i>Tìm nhân viên</a>
                            </li>
                            <li>
                                <a href="invoice.html"><i class="fa fa-coffee"></i>Danh sách cấp độ</a>
                            </li>
                            <li>
                                <a href="invoice.html"><i class="fa fa-coffee"></i>Phân quyền truy cập</a>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Thống kê <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-bicycle "></i>Sản phẩm bán chạy</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-flask "></i>Sản phẩm ế</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-flask "></i>Doanh thu<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#"><i class="fa fa-plus "></i>Doanh thu ngày</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-comments-o "></i>Doanh thu tuần</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-comments-o "></i>Doanh thu năm</a>
                                    </li>

                                </ul>

                            </li>
                            <li>
                                <a href="#"><i class="fa fa-flask "></i>Sản phẩm đã bán<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#"><i class="fa fa-plus "></i>Sản phẩm đã bán trong ngày</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-comments-o "></i>Sản phẩm đã bán trong tuần</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-comments-o "></i>Sản phẩm đã bán trong tháng</a>
                                    </li>
                                </ul>

                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="table.html"><i class="fa fa-flash "></i>LOGS</a>

                    </li>

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
                <?=  $content ?>
                
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
        
    </div>





    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
