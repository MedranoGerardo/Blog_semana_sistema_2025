<?php

// Rutas para la Semana del Sistema 2025
    namespace lib;

    class Route{
        private static $routes = [];
        private static $URL_BASE = "/MVC_Blog/public/";

        public static function get($uri, $action) {
            self::$routes['GET'][self::$URL_BASE . ltrim($uri, '/')] = $action;
        }

        public static function post($uri, $action) {
            self::$routes['POST'][self::$URL_BASE . ltrim($uri, '/')] = $action;
        }

        public static function dispatch($uri, $method) {
            if(isset(self::$routes[$method][$uri])) {
                $action = self::$routes[$method][$uri];
                if(is_array($action)) {
                    $controllerName = $action[0];
                    $methodName = $action[1];
                    $controller = new $controllerName();
                    return call_user_func_array([$controller, $methodName], []);
                } elseif(is_callable($action)) {
                    return call_user_func($action);
                }
            } else {
                http_response_code(404);
                echo "404 Not Found";
            }
        }
    }
?>