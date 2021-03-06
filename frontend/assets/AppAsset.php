<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
//        'css/bootstrap.min.css',
//        'css/clean-blog.css',
//        'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic',
//        'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
//        'css/font-awesome.min.css',
    ];
    public $js = [
//        'js/jquery/jquery.min.js',
//        'js/bootstrap.bundle.min.js',
//        'js/clean-blog/clean-blog.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
