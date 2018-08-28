<?php
    return [
        'id' => 'school-web',
        'basePath' => realpath( __DIR__ . '/../'),
        'bootstrap' => ['debug'],
        'components' => [
            'urlManager' => [
                'enablePrettyUrl' => true,
                'showScriptName' => false,
                'class' => 'codemix\localeurls\UrlManager',
                'languages' => ['ru', 'en', 'he'],
                'enableDefaultLanguageUrlCode' => true
                ],
            'request' => [
                'cookieValidationKey' => 'ewrewrwererere'
                ]
            ],
        'modules' => [
            'debug' => 'yii\debug\Module'
            ]
       ];