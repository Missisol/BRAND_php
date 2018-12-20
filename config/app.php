<?php

return [
    //  Настройки приложения
    'app' => [
        'name' => 'Brand',
        'host' => 'localhost',
        'logPath' => ROOT . "/data/logs",
        'templatesPath' => ROOT . '/templates',

        'assets' => [
            'css' => [
                '/css/bootstrap.min.css',
                '/css/style.css',
                '/css/style_index.css',
                '/css/style_products.css',
            ],
            'js' => [
                '/js/vendor/jquery-3.3.1.min.js',
                '/js/vendor/popper.min.js',
                '/js/vendor/bootstrap.min.js',
                '/js/app.js',
            ],
        ],
    ]
];