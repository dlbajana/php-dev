<?php

return [
    'database' => [
        'name' => 'php_dev',
        'username' => 'homestead',
        'password' => 'secret',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
