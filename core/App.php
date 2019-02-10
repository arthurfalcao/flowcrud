<?php

namespace App\Core;

class App {
    
    protected static $reqistry = [];

    public static function bind($key, $value) {
        
        static::$reqistry[$key] = $value;
    }

    public static function get($key) {
        
        if (!array_key_exists($key, static::$reqistry)) {
            throw new Exception('No {$key} is bound in this container.');
        }

        return static::$reqistry[$key];
    }
}