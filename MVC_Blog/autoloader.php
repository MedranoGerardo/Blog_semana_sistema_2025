<?php
    spl_autoload_register(function ($class) {
        $directories = [
            __DIR__ . '/app/controllers/',
            __DIR__ . '/app/models/',
            __DIR__ . '/lib/'
        ];
        
        foreach ($directories as $directory) {
            $file = $directory . $class . '.php';
            if (file_exists($file)) {
                require_once $file;
                return;
            }
        }
    });
?>