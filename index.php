<?php

define('DS', DIRECTORY_SEPARATOR); //   PLECA SEPARADOR
define('ROOT', realpath(dirname(__FILE__)) . DS); // DIRECTORIO
define('APP_PATH', ROOT . 'config' . DS); //  directorio config

/**Llamo a todos los archivos que estan en la carpeta config */
require_once APP_PATH . 'Config.php';
require_once APP_PATH.'Rutas.php';

$rutas = new Rutas();
$rutas->run();

