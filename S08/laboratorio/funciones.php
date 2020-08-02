<?php

define("SERVIDOR", "s08-mysql:3306");
define("USUARIO", "root");
define("PASSWORD", "secret");
define("NOMBRE_BD", "usuariosdb");

function conectar() {
    return mysqli_connect(SERVIDOR, USUARIO, PASSWORD) or die("Unable to Connect to ".SERVIDOR);
}