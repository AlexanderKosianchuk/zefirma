<?php

namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    	'css/style.css',
    	'css/slick/slick.css',
    	'css/slick/slick-theme.css',
    ];
    public $js = [
    	'js/main.js',
    	'js/video.js',
    	'js/jquery.mousewheel.min.js',
    	'js/slick.min.js',
    	'js/photo.js',
    	'js/spa.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
