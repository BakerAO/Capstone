<?php

namespace App\Core;
class Application{
    protected static $registry = [];
    public static function bind($key, $value){
        static::$registry[$key] = $value;
    }
    public static function get($key){
        if (! array_key_exists($key, static::$registry)){
            throw new Exception('Key not found');
        }
        return static::$registry[$key];
    }
}