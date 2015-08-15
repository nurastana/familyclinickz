<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot/site';
    public $baseUrl = '@web/site';
    public $css = [
    ];
    public $js = [
//        'https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js',
        'js/jquery.flexslider-min.js',
        'js/script.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
