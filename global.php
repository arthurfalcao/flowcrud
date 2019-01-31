<?php

require_once __DIR__ . "/class/config.php";

spl_autoload_register('loadClass');

function loadClass($className) {

    if (file_exists(__DIR__ . '/class/' . $className . '.php')) {
        
        require_once __DIR__ . '/class/' . $className . '.php';
    }
}