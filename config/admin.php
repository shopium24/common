<?php

$config = [
    'id' => 'admin',
    'basePath' => dirname(__DIR__),
    'components' => [
        'assetManager' => [
            'baseUrl' => 'http://common/assets',
            'basePath' => dirname(__DIR__) . '/assets',
        ],
    ],
    'params' => require(__DIR__ . '/../config/params.php'),
];

return $config;
