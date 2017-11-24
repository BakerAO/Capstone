<?php

return [
    'database' => [
        'name' => 'prototype',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=192.168.1.112',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];