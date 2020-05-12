<?php

$db_host="localhost";
$db_name="ivelite_login";
$db_user="root";
$db_pass="";

    $mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);

    $salida = "";
    $query = "SELECT * FROM vuelos ORDER BY Origen";
    
    if (isset($_POST['consulta'])){
        $q = $mysqli->real_escape_string($_POST['consulta']);
        $query = "SELECT *  FROM vuelos WHERE Origen LIKE '%".$q."%'";
    }
    
    $resultado = $mysqli->query($query);

     if ($resultado->num_rows > 0){
        $salida.= "<table class= 'tabla_datos'>
                    <thead>
                        <tr>
                            <td>Origen</td>
                            <td>Destino</td>
                            <td>FechaInicio</td>
                            <td>Precio</td>
                        </tr>
                    </thead>
                    <tbody>";
    
    while ($fila = $resultado->fetch_assoc()){
        $salida.= "<tr>
                        <td>".$fila['Origen']."</td>
                        <td>".$fila['Destino']."</td>
                        <td>".$fila['FechaInicio']."</td>
                        <td>".$fila['Precio']."</td>
                    </tr>";
    }
    
    $salida.="</tbody></table>";
    
    } else $salida.="No hay vuelos disponibles con esos filtros";
    
    
    echo $salida;
    
    $mysqli->close();
?>