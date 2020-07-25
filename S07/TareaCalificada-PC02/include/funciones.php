<?php
include("./data.php");


$accion = $_POST["accion"];


// crea cookies para guardar datos
function crearCookieSiNoExiste($cookie_name, $init_val = "") {
    if (!isset($_COOKIE[$cookie_name])) {
        setcookie($cookie_name, $init_val, time()+3600);
    }
}

function updateCookie($cookie_name, $val) {
    setcookie($cookie_name, $val, time()+3600);
}


if ($accion == "valida_dni") {
    validarDNI();
}
// valida se el DNI existe en archivo de votos
function validarDNI() {
    crearCookieSiNoExiste("DNIs_registrados");
    $dni = $_POST["dni"];
    $existe_dni = false;
    $DNIs_registrados =  explode("|", $_COOKIE["DNIs_registrados"]);
    
    if (in_array($dni, $DNIs_registrados))
        echo "El Nro. de DNI ingresado ya voto, por favor volver a ingresar.";
    else
        echo "ok";
}

if ($accion == "votar") {
    votar();
}
// escribir al final del archivo de votos
function votar() {
    foreach (CANDIDATOS as $candidato) {
        crearCookieSiNoExiste("votos_".strtolower($candidato["candidato"]), 0);
    }

    $dni = $_POST["dni"];
    $voto = $_POST["voto"];
    $nombre_cookie = "votos_".strtolower($_POST["voto"]);

    $voto_ant = $_COOKIE[$nombre_cookie];
    $voto_nuevo = intval($voto_ant) + 1;
    
    // updateCookie()
    
    updateCookie($nombre_cookie, $voto_nuevo);

    echo "ok,".$_COOKIE[$nombre_cookie];
}