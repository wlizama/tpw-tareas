<?php
require('./funciones.php');

$usuario = $_POST["usuario"];
$password = $_POST["password"];

// phpinfo();

$con = conectar();

if ($con) {
    echo 'conexion establecida';
}
else 
    echo 'ERROR en conexion';