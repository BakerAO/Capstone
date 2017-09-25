<?php

return [
    'database' => [
        'name' => 'mytodo',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=192.168.1.111',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]

];