<?php

$config = [
    'aliases' => [
        '@bower' => realpath(__DIR__. '/../../yii2-app-basic/node_modules'),
        '@npm' => realpath(__DIR__. '/../../yii2-app-basic/node_modules'),
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'B1uah2HVO-CEdFt5o-G46_4-dL3aEo_K',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ]
];

return $config;
