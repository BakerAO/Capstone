<?php

$router->get('', 'App\Controllers\PagesController@home');
$router->get('about', 'App\Controllers\PagesController@about');
$router->get('basic', 'App\Controllers\PagesController@basic');
$router->get('contact', 'App\Controllers\PagesController@contact');
$router->get('users', 'App\Controllers\UsersController@index');
$router->post('users', 'App\Controllers\UsersController@store');