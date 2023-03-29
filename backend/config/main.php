<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'referensi' => [
            'class' => 'backend\modules\referensi\Module',
        ],
        'gridview' =>  [
            'class' => \kartik\grid\Module::class,
            'bsVersion' => '4.x', // or '3.x'
            // 'downloadAction' => 'gridview/export/download',
            // 'i18n' => [],
            // 'exportEncryptSalt' => 'tG85vd1',
        ]  
    ],
    'components' => [
    //     'view' => [
    //         'theme' => [
    //             'pathMap' => [
    //                '@app/views' => '@backend/views/layouts/main'
    //             ],
    //         ],
    //    ],
    
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
    
    ],
    'params' => $params,
];
