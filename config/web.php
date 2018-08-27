<?php
    return [
        'id' => 'school-web',
        'basePath' => realpath( __DIR__ . '/../'),
        'language' => 'ru',
        'bootstrap' => ['debug'],
        'components' => [
            'urlManager' => [
                'enablePrettyUrl' => true,
                'showScriptName' => false
                ],
            'request' => [
                'cookieValidationKey' => 'ewrewrwererere'
                ]
            ],
        'modules' => [
            'debug' => 'yii\debug\Module'
            ]
       ];