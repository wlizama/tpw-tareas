<?php
include('./funciones.php');

$usuario = $_POST["usuario"];
$password = $_POST["password"];

// phpinfo();
// crear BD si no existe

$location = "./index.php";

if (existeUsuario($usuario, $password))
    $location = "./registro.php";
header("Location: $location");
exit;