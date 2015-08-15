<?php
namespace app\web\themes\fc;


class ThemeAsset extends \yii\web\AssetBundle{

    public $basePath = '@webroot/themes/fc';
    public $baseUrl = '@web/themes/fc';

    public $css = [
      'css/slide/owl.carousel.min.css',
      'css/slide/owl.theme.default.css',
      'css/slide/liCover.css',
      'css/reset.css',
      'css/style.css',
      'css/fonts.css',
      'css/slide.css',
      'css/jsCarousel-2.0.0.css',
      'css/stylem.css',
    ];

    public $js = [
        'js/owl.carousel.min.js',
        'js/jquery.liCover.js',
        'js/script.js',
        'js/add.js',
        'js/jsCarousel-2.0.0.js',
    ];

    public $depends = [
      'yii\web\JqueryAsset',
    ];
}