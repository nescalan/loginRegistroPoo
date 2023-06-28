<?php #Conexion.php

class Conexion
{
    public $servidor = "localhost";
    public $usuario = "root";
    public $clave = "4u3p7px6";
    public $database = "loginpoo2023";
    public function conectar()
    {
        return mysqli_connect(
            $this->servidor,
            $this->usuario,
            $this->clave,
            $this->database
        );
    }
}

?>