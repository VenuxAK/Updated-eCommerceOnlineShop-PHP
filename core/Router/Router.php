<?php

class Router
{
    public static $routes = [
        "GET" => [],
        "POST" => []
    ];

    public static function load(string $routes)
    {
        $router = new Router;
        require "core/Router/$routes.php";
        return $router;
    }

    public static function get($uri, $controller)
    {
        self::$routes["GET"][$uri] = $controller;
    }

    public static function post($uri, $controller)
    {
        self::$routes["POST"][$uri] = $controller;
    }

    public static function direct($uri, $method)
    {
        if(!array_key_exists($uri,self::$routes[$method])) {
            die("<h1>404 Page Not Found!</h1>");
        }
        $routeInfo = self::$routes[$method][$uri];
        self::callAction($routeInfo[0],$routeInfo[1]);
    }
    public static function callAction($class, $method)
    {
        $class::$method();
    }

}

class Route extends Router
{

}
