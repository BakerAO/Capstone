<?php

return [
    'database' => [
        'name' => 'capstone',
        'username' => 'remote',
        'password' => 'remoteRoot2018',
        'connection' => 'mysql:host=10.0.0.88',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];