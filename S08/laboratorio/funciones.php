<?php

function conectar() {
    $servidor = "tpw-s08:3306";
    $usuario = "root";
    $password = "secret";
    $nombre_bd = "usuariosdb";
    return mysqli_connect($servidor, $usuario, $password, $nombre_bd);
}

function existeUsuario($nombre, $clave) {
    $con = conectar();
    $query = "SELECT * FROM usuarios WHERE nombre='$nombre' AND clave = '$clave';";
    $result = mysqli_query($con, $query);
    $rows = $result->num_rows;
    mysqli_close($con);
    return $rows > 0 ? true : false;
}

function getListaUsuarios() {
    $con = conectar();
    $query = "SELECT * FROM usuarios;";
    return mysqli_query($con, $query);
}

function eliminarUsuario($nombre) {
    $con = conectar();
    $query = "DELETE FROM usuarios WHERE nombre='$nombre';";
    $result = mysqli_query($con, $query);
    mysqli_close($con);
}

function insertarUsuario($nombre, $clave) {
    $con = conectar();
    $query = "INSERT INTO usuarios VALUES('$nombre', '$clave');";
    $result = mysqli_query($con, $query);
    mysqli_close($con);
}