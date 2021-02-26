<?php


class Router
{
//    public function __construct(){
//        echo 'Router!';
//    }

    protected static array $routes = [];
    protected static array $route = [];

    public static function add($regexp, $route = [])
    {
        self::$routes[$regexp] = $route;
    }

    public static function getRoutes(): array
    {
        return self::$routes;
    }

    public static function getRoute(): array
    {
        return self::$route;
    }

    public static function matchRoute($url): bool
    {
        foreach (self::$routes as $pattern => $route) {
            if ($pattern === $url) {
                self::$route = $route;
                return true;
            }
        }
        return false;
    }
}