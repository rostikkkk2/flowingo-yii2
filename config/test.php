<?php
$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/test_db.php';

return [
    'id' => 'basic-tests',
    'basePath' => dirname(__DIR__),
    'language' => 'ru',
    'layout' => 'basic',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'db' => $db,
        'mailer' => [
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
        'assetManager' => [
            'basePath' => __DIR__ . '/../web/assets',
        ],
        'urlManager' => [
          'showScriptName' => false,
            'enablePrettyUrl' => true,
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
        'user' => [
            'identityClass' => 'app\models\User',
        ],
        'request' => [
            'cookieValidationKey' => 'test',
            'enableCsrfValidation' => false,
            // but if you absolutely need it set cookie domain to localhost
            /*
            'csrfCookie' => [
                'domain' => 'localhost',
            ],
            */
        ],
    ],
    'params' => $params,



];
