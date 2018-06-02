<?php

namespace app\assets;
use yii\web\AssetBundle;

class AppAsset extends AssetBundle {
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
      '/node_modules/font-awesome/css/font-awesome.min.css',
    ];
    public $js = [
      'js/auth.js',
      'js/categorys.js',
      'js/popup.js',
      'js/recalls.js'
    ];
    public $depends = [
      'yii\web\YiiAsset',
      'yii\bootstrap\BootstrapPluginAsset',
    ];
}
