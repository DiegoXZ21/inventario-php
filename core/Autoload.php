<?php 
    spl_autoload_register(function ($class) {

        $baseDir = dirname(__DIR__) . '/';

        $paths = [
            'app/entities/',
            'app/controllers/',
            'app/middleware/',
            'app/repositories/',
            'app/services/',
            'app/validators/',
            'app/views',
            'config/',
            'core/',
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