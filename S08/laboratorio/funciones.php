<?php

function conectar() {
    $servidor = "tpw-s08:3306";
    $usuario = "root";
    $password = "secret";
    $nombre_bd = "usuariosdb";
    return mysqli_connect($servidor, $usuario, $password, $nombre_bd) or die("no se pudo conectar a ".$servidor);
}

function existeUsuario($con, $nombre, $clave) {
    $query = "SELECT * FROM usuarios WHERE nombre='".$nombre."' AND clave = '".$clave."'";
    
}