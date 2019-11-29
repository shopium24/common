<?php

//Yii::setAlias('@common',dirname(__DIR__).'/../common');
//echo dirname(__DIR__);die;
$config = [
    'basePath' => dirname(__DIR__),
   // 'defaultRoute' => 'badmin/index',
    'components' => [
       // 'aliases' => [
          //  '@app' => dirname(__DIR__).'/web/test',
           // '@common' => dirname(__DIR__).'/../common',
       // ],
        'assetManager' => [
            'baseUrl' => 'http://common/assets',
            'basePath' => dirname(__DIR__) . '/assets',
        ],
        'view' => [
            'theme' => [
              //  'basePath' => '@common/web/themes'
            ],
        ],
         'request' => [
             'baseUrl' => '',
         ],
        'urlManager' => [
            'baseUrl' => '',
            /*'rules' => [
                ['pattern' => 'app/<controller:[0-9a-zA-Z_\-]+>', 'route' => 'admin/admin/<controller>/index'],
                ['pattern' => 'app/<controller:[0-9a-zA-Z_\-]+>/<action:[0-9a-zA-Z_\-]+>', 'route' => 'admin/admin/<controller>/<action>'],
                ['pattern' => '<module:\w+>/<controller:[0-9a-zA-Z_\-]+>/<action:[0-9a-zA-Z_\-]+>', 'route' => '<module>/admin/<controller>/<action>'],
                ['pattern' => '<module:\w+>', 'route' => 'admin/<module>/default/index'],
                ['pattern' => '<module:\w+>/<controller:[0-9a-zA-Z_\-]+>', 'route' => '<module>/admin/<controller>/index'],
                ['pattern' => '<module:\w+>/<controller:[0-9a-zA-Z_\-]+>/<action:[0-9a-zA-Z_\-]+>/<page:\d+>', 'route' => '<module>/admin/<controller>/<action>'],

            ],*/
        ]
    ],
];
if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['modules']['debug']['class'] = 'yii\debug\Module';
    $config['modules']['debug']['traceLine'] = function ($options, $panel) {
        $filePath = $options['file'];
        return strtr('<a href="phpstorm://open?url={file}&line={line}">{file}:{line}</a>', ['{file}' => $filePath]);
    };
    //$config['modules']['debug']['dataPath'] = dirname(__DIR__).'/runtime/debug';
}
return $config;
