<?php

return [
    'database' => [
        'name' => 'default',
        'username' => 'default',
        'password' => 'secret',
        'connection' => 'mysql:host=mysql',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ],
    ],
];
