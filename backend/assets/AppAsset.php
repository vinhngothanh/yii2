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
    ];
    public $js = [
        'https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js',
        'js/main.js',
    ];
    public $depends = [
        'yidas\adminlte\AdminlteAsset'
    ];
}
