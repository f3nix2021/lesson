<?php

spl_autoload_register(function ($className) {
    $classPath = str_replace('\\', '/', $className);
    $file = __DIR__ . "/autoload.php";
    //pr( $file);
    if (file_exists($file)) {
        include_once $file;
    }
});
