<?php
    // Iniciar sesión
    session_start();

    // Cargar autoloader
    require_once __DIR__ . '/../autoloader.php';

    // Cargar rutas
    require_once __DIR__ . '/../routes/web.php';

    // Obtener la URL solicitada"
    if (!isset($_GET['url'])) {
        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $scriptDir = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');

        if ($scriptDir !== '' && $scriptDir !== '/' && strpos($requestUri, $scriptDir) === 0) {
            $path = substr($requestUri, strlen($scriptDir));
        } else {
            $path = $requestUri;
        }

        $path = trim($path, '/');
        $_GET['url'] = ($path === '') ? '/' : $path;
    }

    // Despachar ruta
    Route::dispatch();
?>