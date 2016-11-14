<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       
        'css/site.css',
        'assets/css/font-awesome.css',
        'assets/css/basic.css',
        'assets/css/custom.css',
    ];
    public $js = [
        
        'assets/js/bootstrap.js',
        'assets/js/jquery.metisMenu.js',
        'assets/js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
