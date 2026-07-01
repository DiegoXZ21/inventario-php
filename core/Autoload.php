<?php 
    spl_autoload_register(function ($class) {
        $paths = [
            'app/models/',
            'app/controllers/',
            'app/middleware/',
            'config/'
        ];

        foreach ($paths as $path) {
            $file = $path . $class . 'php';
            if (file_exists($file)) {
                require_once $file;
                return;
            }
        }
    });
?>