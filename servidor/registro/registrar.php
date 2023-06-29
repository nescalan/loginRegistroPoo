<?php #registrar.php

require_once "./clases/Auth.php";

$usuario = $_POST['usuario'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$Auth = new Auth();

if ($Auth->registrar($usuario, $password)) {
    # Redirect to index
    header('Location: index.php')
} else {
    # Error Message
    echo "No se puede registrar";
}

require_once "./registro.php";

?>