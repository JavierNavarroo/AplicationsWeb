<!DOCTYPE HTML>

<?php 
    session_start(); 
    require_once '..\conf\Aplicacion.php';
    require_once '..\conf\Config.php';
    // require_once '.\assets\conf\Config.php';
    // require_once '.\assets\conf\Usuario.php';
    $app = Aplicacion::getSingleton();
    $conn = $app->conexionBd();

    if(isset($_POST["submit"])){
        if(!empty($_POST['mensaje'])){
            $ID = $_SESSION['ID']+1;
            $_SESSION['ID'] = $_SESSION['ID']+1;
            $autor=$_SESSION['nombre'];
            $titulo=$_POST['titulo'];
            $mensaje=$_POST['mensaje'];
            $respuestas=$_POST['respuestas'];
            $identificador=$_POST['identificador'];
            $fecha = date("d-m-y");
            
            
            //Evitamos que el usuario ingrese HTML
            $mensaje = htmlentities($mensaje);
            echo "identificador:";
            echo $identificador;
            
            //Grabamos el mensaje en la base de datos.
            $query = "INSERT INTO foro (ID,Autor, Titulo, Mensaje, Fecha, Respuestas, Identificador, Ultres) VALUES ('$ID','$autor', '$titulo', '$mensaje','$fecha','$respuestas', '$identificador','$fecha')";
            
            echo $query;
            echo "identificador:";
            echo $identificador;
            $result = $conn->query($query);
            
            /* si es un mensaje en respuesta a otro actualizamos los datos */
            if ($identificador != 0)
            {
                $query2 = "UPDATE foro SET respuestas=respuestas+1 WHERE ID='$identificador'";
                $result2 = $conn->query($query2);
                echo $query2;
                Header("Location: tema.php?ID=$identificador");
                exit();
            }
            Header("Location: ../../home.php");
        }
    }

?>
</html>