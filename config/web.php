<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'ru',
    'layout' => 'basic',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'modules' => [
       'admin' => [
           'class' => 'app\modules\admin\Module',
       ],
   ],
    'components' => [
        'authManager' => [
             'class' => 'yii\rbac\DbManager',
         ],
        'request' => [
            'baseUrl' => '',
            'cookieValidationKey' => 'FhNPlrH4wwObUckng4Lr_vCO4IbxyIkD',
        ],

        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => ['user/enter']
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => true,
        ],
        'mail' => [
          'class' => 'yii\swiftmailer\Mailer',
          'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => 'smtp.sendgrid.net',
            'username' => 'apikey',
            'password' => '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',
            'port' => '587',
            'encryption' => 'tls',
          ]
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

        'db' => $db,

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
              '' => 'page/landing',
              '<action:(about|catalog|delivery)>' => '/page/<action>',
              '<controller:\w+>s' => '<controller>/index',
              '<controller>/<id:\d+>' => '<controller>/show',
              '<controller>/new' => '<controller>/new',
              '<controller>/edit/<id:\d+>' => '<controller>/edit',
              'POST <controller>' => '<controller>/create',
              'PATCH <controller>/<id:\d+>' => '<controller>/update',
              'PUT <controller>/<id:\d+>' => '<controller>/update',
              'POST <controller>/delete/<id:\d+>' => '<controller>/delete/'
            ],
        ],

    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
