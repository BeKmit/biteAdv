<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',

    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
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

        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@app.theme/views'
                ],
            ],
        ],

        'urlManagerBackend' => [
            'class' => 'yii\web\urlManager',
            'baseUrl' => $params['protocol'] . '://' . $params['domain.backend'],
            'hostInfo' => $params['protocol'] . '://' . $params['domain.backend'],
            'showScriptName' => false,
            'enablePrettyUrl' => true,
        ],
    ],

    'modules' => [
        # warrence/yii2-kartikgii
        'gridview' => [
            'class' => 'kartik\grid\Module',
        ],

        'requestor' => [
            'class' => 'app\modules\requestor\Module',
        ],

        'sourcing' => [
            'class' => 'app\modules\sourcing\Module',
        ],

        'approver' => [
            'class' => 'app\modules\approver\Module',
        ],
    ],

    'params' => $params,
];
