<?php

<<<<<<< HEAD
<<<<<<< HEAD
require_once __DIR__.'/Aplicacion.php';
=======
require_once '../iVELiTE/assets/conf/Aplicacion.php';
>>>>>>> master
=======
require_once 'Aplicacion.php';
>>>>>>> master

/**
 * Parámetros de conexión a la BD
 */
define('BD_HOST', 'localhost');
define('BD_NAME', 'ivelite_login');
define('BD_USER', 'root');
define('BD_PASS', '');


ini_set('default_charset', 'UTF-8');

//iniciar aplicacion
$app = Aplicacion::getSingleton();
$app->init(array('host'=>BD_HOST, 'bd'=>BD_NAME, 'user'=>BD_USER, 'pass'=>BD_PASS));

register_shutdown_function(array($app, 'shutdown'));
