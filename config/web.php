<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'name' => APP_NAME,
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'ru-RU',
    'sourceLanguage' => 'ru-RU',
    'defaultRoute'=>'/cms/default/index',
    'components' => [
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'assetManager' => [
            'bundles' => [
//                'yii\web\JqueryAsset' => [
////                    'sourcePath' => '@webroot/themes/asil/js',
//                    'sourcePath'=>null,
//                    'basePath'=>null,
//                    'baseUrl'=>'http://code.jquery.com',
//                    'js' => ['jquery-2.1.4.js'] // тут путь до Вашего экземпляра jquery
//                ],
            ],
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '$32fklwejrkl23jr@#F#@d',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\modules\cms\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => $params['email']->host,
                'username' => $params['email']->username,
                'password' => $params['email']->password,
                'port' => $params['email']->port,
                'encryption' => $params['email']->encryption,
            ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        'urlManager' => [
            'class'=>'app\modules\cms\components\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'reviews'=>'/cms/reviews/index',
                '<type:(news|article|stock)>/<alias>'=>'/cms/article/view',
                '<type:(news|article|stock)>'=>'/cms/article/list',
                
                
                'admin/<module>/<controller>/<action>' => '<module>/admin/<controller>/<action>',
                'admin/<module>/<controller>' => '<module>/admin/<controller>',
                'admin' => 'cms/admin/default',
            ],
        ],
        'thumbler'=> [
            'class' => 'alexBond\thumbler\Thumbler',
            'sourcePath' => 'images/',
            'thumbsPath' => 'assets/thumbs/',
        ],
        'view' => [
            'theme' => [
                'basePath' => '@app/themes/'.THEME,
                'baseUrl' => '@web/themes/'.THEME,
                'pathMap' => [
                    '@app/views' => '@webroot/themes/'.THEME,
                    '@app/modules' => '@webroot/themes/'.THEME.'/modules',
                ],
            ],
        ],
    ],
    'modules' => [
        'cms' => [
            'class' => 'app\modules\cms\Module'
        ],
        'store' => [
            'class' => 'app\modules\store\Module',
        ],
        'redactor' => [
            'class' => 'yii\redactor\RedactorModule',
            'uploadDir' => '@webroot/uploads',
            'uploadUrl' => '@web/uploads',
            'widgetClientOptions'=>[
                'lang'=>'ru',
                'replaceDivs'=>false,
                'deniedTags'=>['style'],
                ]
        ],
        'directorBoard' => [
            'class' => 'app\modules\directorBoard\Module',
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug']['class'] = 'yii\debug\Module';
    $config['modules']['debug']['allowedIPs'] = ['*'];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii']['class'] = 'yii\gii\Module';
    $config['modules']['gii']['allowedIPs'] = ['*'];
}

return $config;
