<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
	'language' => 'ru',
	'sourceLanguage' => 'en',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'languageSwitcher', 'assetsAutoCompress'],
    'components' => [
        'request' => [
        	'enableCsrfValidation' => false,
            'cookieValidationKey' => 'bbxViAI8R2453asgg4534ptaFerV1',
        	'baseUrl' => ''
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
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
            'useFileTransport' => true,
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
    	'i18n' => [
    		'translations' => [
    			'app*' => [
    				'class' => 'yii\i18n\PhpMessageSource',
    				'basePath' => '@app/messages',
    				'sourceLanguage' => 'en',
    				'fileMap' => [
    					'app' => 'app.php',
    					'app/error' => 'error.php',
    				],
    				'on missingTranslation' =>
    				['app\components\TranslationEventHandler',
    					'handleMissingTranslation']
    				],
    			],
    	],
    	'urlManager' => [
    		'enablePrettyUrl' => true,
    		'showScriptName' => false,
    		'rules'=> [
    			'' => 'site/index',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
    		]
    	],
    	'languageSwitcher' => [
    		'class' => 'app\components\LanguageSwitcher',
    	],
    	'assetManager' => [
    		'appendTimestamp' => true,
    		'class' => 'yii\web\AssetManager',
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'sourcePath' => null,   // do not publish the bundle
                    'js' => ['//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js']
    			],
            	'yii\bootstrap\BootstrapAsset' => [
            		'sourcePath' => null,
            		'js' => [],
            		'css' => [],
            	]
			]
        ],
    	'assetsAutoCompress' => [
    		'class'             => '\skeeks\yii2\assetsAuto\AssetsAutoCompressComponent',
            'enabled'           => true,
            'jsCompress'        => true,
            'cssFileCompile'    => true,
            'jsFileCompile'     => true,
    	],
        'db' => require(__DIR__ . '/db.php'),
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
