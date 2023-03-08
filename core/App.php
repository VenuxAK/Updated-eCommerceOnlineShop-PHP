<?php

class App
{
    private static $data = [];

    public static function bind($key, $value) 
    {
        self::$data[$key] = $value;
    }

    public static function get($key)
    {
        return self::$data[$key];
    }
}

