<?php

class Request
{
    public static function URI()
    {
        return parse_url(trim($_SERVER["REQUEST_URI"], "/"), PHP_URL_PATH);
    }
    public static function METHOD()
    {
        return $_SERVER["REQUEST_METHOD"];
    }
}
