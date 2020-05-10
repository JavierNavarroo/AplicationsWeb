<?php

class Usuario
{

    public static function login($userName, $password)
    {
        $user = self::buscaUsuario($userName);
        if ($user && $user->compruebaPassword($password)) {
            return $user;
        }
        return false;
    }


    public static function buscaUsuario($userName)
    { 
        $app = Aplicacion::getSingleton();
        $conn = $app->conexionBd();
        $query = sprintf("SELECT * FROM usuarios U WHERE U.user = '%s'", $conn->real_escape_string($userName));
        $rs = $conn->query($query);
        $result = false;
        if ($rs) {
            if ( $rs->num_rows == 1) {
                $fila = $rs->fetch_assoc();
                $user = new Usuario($fila['user'], $fila['email'], $fila['pass'], $fila['rol']);
               // $user->id = $fila['id'];
                $result = $user;
            }
            $rs->free();
        } else {
            echo "Error al consultar en la BD: (" . $conn->errno . ") " . utf8_encode($conn->error);
            exit();
        }
        return $result;
    }
    
    public static function alta($userName, $email, $password, $rol)
    {
        $user = self::buscaUsuario($userName);
        if ($user) {
            return false;
        }
        $user = new Usuario($userName, $email, self::hashPassword($password), $rol);
        return self::guarda($user);
    }
    
    private static function hashPassword($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }
    
    public static function guarda($usuario)
    {
        if ($usuario->id !== null) {
            return self::actualiza($usuario);
        }
        return self::inserta($usuario);
    }
    
    private static function inserta($usuario)
    {
        $app = Aplicacion::getSingleton();
        $conn = $app->conexionBd();
        $query=sprintf("INSERT INTO usuarios (user, pass, rol, email) VALUES('%s', '%s', '%s', '%s')"
            , $conn->real_escape_string($usuario->userName)
            , $conn->real_escape_string($usuario->password)
            , $conn->real_escape_string($usuario->rol)
            , $conn->real_escape_string($usuario->email));
        if ( $conn->query($query) ) {
            $usuario->id = $conn->insert_id;
        } else {
            echo "Error al insertar en la BD: (" . $conn->errno . ") " . utf8_encode($conn->error);
            exit();
        }
        return $usuario;
    }
    
    private static function actualiza($usuario)
    {
        $app = Aplicacion::getSingleton();
        $conn = $app->conexionBd();
        $query=sprintf("UPDATE usuarios U SET user = '%s', pass='%s', rol='%s', email='%s' WHERE U.id=%i"
            , $conn->real_escape_string($usuario->userName)
            , $conn->real_escape_string($usuario->email)
            , $conn->real_escape_string($usuario->password)
            , $conn->real_escape_string($usuario->rol)
            , $usuario->id);
        if ( $conn->query($query) ) {
            if ( $conn->affected_rows != 1) {
                echo "No se ha podido actualizar el usuario: " . $usuario->id;
                exit();
            }
        } else {
            echo "Error al insertar en la BD: (" . $conn->errno . ") " . utf8_encode($conn->error);
            exit();
        }
        
        return $usuario;
    }
    
    private $id;

    private $userName;

    private $email;

    private $password;

    private $rol;

    private function __construct($userName, $email, $password, $rol)
    {
        $this->userName= $userName;
        $this->email = $email;
        $this->password = $password;
        $this->rol = $rol;
    }

    public function id()
    {
        return $this->id;
    }

    public function rol()
    {
        return $this->rol;
    }

    public function userName()
    {
        return $this->userName;
    }
    public function compruebaPassword($password)
    {
        return password_verify($password, $this->password);
    }

    public function cambiaPassword($nuevoPassword)
    {
        $this->password = self::hashPassword($nuevoPassword);
    }
}
