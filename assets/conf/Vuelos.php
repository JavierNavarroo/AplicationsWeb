<?php

class Usuario
{


    public static function buscarVuelo($origen, $destino, $inicio, $fin)
    {
        $app = Aplicacion::getSingleton();
        $conn = $app->conexionBd();

        
        $query = sprintf("SELECT Origen, Destino, FechaInicio, FechaFin  FROM vuelos v
        WHERE v.Origen = '%s' AND v.Destino = '%s' AND v.FechaInicio = '%s' AND v.FechaFin = '%s'
        ORDER BY v.origen"
        , $conn->real_escape_string($origen)
        , $conn->real_escape_string($destino)
        , $conn->real_escape_string($inicio)
        , $conn->real_escape_string($fin));

        $rs = $conn->query($query);
        $result = false;

        if($rs){
            if($rs->num_row > 0){
                while($fila = $resultado->fetch_assoc()){
                    $salida = mostrarVuelos($fila);
                }
                $salida.="</tbody></table>";
                $result = $salida;

            }
            $rs->free();
        }
        else {
            echo "Error al consultar la BD (" . $conn->errno .")" . utf8_encode($conn->error);
            exit();
        }
        return $salida;
    }


    private static function mostrarVuelos($vuelo)
    {

        $salida.= "<tr>
        <td>".$vuelo->origen."</td>
        <td>".$vuelo->destino."</td>
        <td>".$vuelo->inicio."</td>
        <td>".$vuelo->fin."</td>
        <td>".$vuelo->precio."</td>
        </tr>";

        return $salida;
    }

    private function __construct($origen, $destino, $inicio, $fin, $precio)
    {
        $this->origen= $origen;
        $this->destino = $destino;
        $this->inicio = $inicio;
        $this->fin = $fin;
        $this->precio = $precio;
    }








}

?>