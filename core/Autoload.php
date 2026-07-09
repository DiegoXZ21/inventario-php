<?php 
    spl_autoload_register(function ($class) {

        $baseDir = dirname(__DIR__) . '/';

        $paths = [
            'app/models/',
            'app/controllers/',
            'app/middleware/',
            'config/'
        ];

        foreach ($paths as $path) {
            $file = $baseDir . $path . $class . '.php';
            if (file_exists($file)) {
                require_once $file;
                return;
            }
        }
    });
?>