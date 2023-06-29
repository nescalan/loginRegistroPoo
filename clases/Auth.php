<?php #Auth.php

require_once "./clases/Conexion.php";

class Auth extends Conexion
{
    public function registrar($usuario, $password)
    {
        $conexion = parent::conectar();
    }
}

?>