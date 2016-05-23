<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
    	'mesaj' => [
	    	'class' => 'backend\modules\mesaj\Module',
	    ],
	],
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
        'request' => [
        // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
	        'cookieValidationKey' => 'Ws_5fvKwQV0EaWpFgpgU0x7aK5BsKfPY',
	        'class' => 'common\components\Request',
	        'web'=> '/backend/web',
	        'aliasUrl' => '/admin'
        ],
        'urlManager' => [
        		'enablePrettyUrl' => true,
        		'showScriptName' => false,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];
