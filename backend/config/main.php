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
    'aliases' => [
        // Alias untuk Hail812/AdminLTE
        '@adminlte-assets' => '@vendor/hail812/yii2-adminlte3/assets',
        // Alias untuk Yii2 AjaxCrud
        '@ajaxcrud' => '@vendor/hoaaah/yii2-ajaxcrud/assets',
    ],
    'modules' => [
        'referensi' => [
            'class' => 'backend\modules\referensi\Module',
        ],
        'layanan' => [
            'class' => 'backend\modules\Layanan\Module'
        ],
        'gridview' =>  [
            'class' => '\kartik\grid\Module'
        ],      
        'admin' => [
            'class' => 'sant\admin\Module',
            'layout' => 'left-menu', // it can be '@path/to/your/layout'.
            'mainLayout' => '@backend/views/layouts/main.php',
            'controllerMap' => [
                'assignment' => [
                    'class' => 'sant\admin\controllers\AssignmentController',
                    'userClassName' => 'common\models\User',
                    'idField' => 'user_id'
                ],
            ],
            // 'as access' => [
            //     'class' => 'yii\filters\AccessControl',
            //     'rules' => [
            //         [
            //             'allow' => true,
            //             'roles' => ['admin', 'user'], // daftar peran yang diizinkan mengakses admin panel
            //         ],
            //         // aturan lainnya
            //     ],
            // ],
        ],
    ],
    'components' => [
    //     'view' => [
    //         'theme' => [
    //             'pathMap' => [
    //                '@app/views' => '@backend/views/layouts/main'
    //             ],
    //         ],
    //    ],
        
        'authManager' => [
            'class' => 'yii\rbac\PhpManager', // or use 'yii\rbac\DbManager'
            // 'defaultRoles' => ['guest'],
        ],
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            // 'identityClass' => 'sant\admin\models\User',
            // 'loginUrl' => ['admin/user/login'],
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

    // 'as access' => [
        // 'class' => 'sant\admin\components\AccessControl',
        // 'allowActions' => [
        //     'site/*',
        //     'admin/*',
        //     'some-controller/some-action',
        //     // The actions listed here will be allowed to everyone including guests.
        //     // So, 'admin/*' should not appear here in the production, of course.
        //     // But in the earlier stages of your development, you may probably want to
        //     // add a lot of actions here until you finally completed setting up rbac,
        //     // otherwise you may not even take a first step.
        // ]
    // ],

    'params' => $params,
];
