<?php

namespace App\Core;
class Application{
    protected static $registry = [];
    public static function bind($key, $value){
        static::$registry[$key] = $value;
    }
    public static function get($key){
        try{
            if(array_key_exists($key, static::$registry)){
                return static::$registry[$key];
            }
        }catch(\Exception $e){
            $blah = $e->getMessage();
        }
        
    }
}