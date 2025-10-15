<?php
    class Route {
        private static $routes = [];

        public static function get($uri, $controller, $method) {
            self::$routes['GET'][$uri] = ['controller' => $controller, 'method' => $method];
        }

        public static function post($uri, $controller, $method) {
            self::$routes['POST'][$uri] = ['controller' => $controller, 'method' => $method];
        }

        public static function dispatch() {
            $requestMethod = $_SERVER['REQUEST_METHOD'];
            $uri = $_GET['url'] ?? '/';
            $uri = trim($uri, '/');
            
            if (empty($uri)) {
                $uri = '/';
            }

            if (isset(self::$routes[$requestMethod][$uri])) {
                $route = self::$routes[$requestMethod][$uri];
                $controller = new $route['controller']();
                $method = $route['method'];
                
                if (method_exists($controller, $method)) {
                    $controller->$method();
                } else {
                    self::notFound();
                }
            } else {
                self::notFound();
            }
        }

        private static function notFound() {
            http_response_code(404);
            echo "<h1>404 - Página no encontrada</h1>";
        }
    }

?>