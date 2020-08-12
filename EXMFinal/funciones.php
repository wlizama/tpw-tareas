<?php

function conectar() {
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $nombre_bd = "bdFarmacia";
    return mysqli_connect($servidor, $usuario, $password, $nombre_bd);
}