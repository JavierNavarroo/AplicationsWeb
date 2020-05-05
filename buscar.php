<?php

require_once __DIR__. '/assets/conf/config.php';
require_once __DIR__.'/assets/conf/Vuelos.php';


$origen = isset($_POST['origen']) ? $_POST['origen']  : '*';
$destino = isset($_POST['destino']) ? $_POST['destino'] : '*';
$fechaInicio = isset($_POST['start']) ? $_POST['start'] : '*';
$fechaFin = isset($_POST['end']) ? $_POST['end'] : '*';

$salida = buscarVuelo($origen, $destino, $fechaInicio, $fechaFin);


echo $salida;


?>