<?php
include("./data.php");

session_start();

$accion = $_POST["accion"];

// crea Sessions para guardar datos
function crearSessionSiNoExiste($session_name, $init_val = "") {
    if (!isset($_SESSION[$session_name])) {
        $_SESSION[$session_name] =  $init_val;
    }
}

function updateSession($session_name, $val) {
    $_SESSION[$session_name] =  $val;
}


if ($accion == "valida_dni") {
    validarDNI();
}
// valida se el DNI existe en archivo de votos
function validarDNI() {
    crearSessionSiNoExiste("DNIs_registrados");
    $dni = $_POST["dni"];
    $existe_dni = false;
    $DNIs_registrados =  explode("|", $_SESSION["DNIs_registrados"]);
    
    if (in_array($dni, $DNIs_registrados))
        echo "El Nro. de DNI ingresado ya voto, por favor volver a ingresar.";
    else
        echo "ok";
}

if ($accion == "votar") {
    votar();
}
// almacenamos votos y DNIs en Sessions
function votar() {

    // creamos dinamicamente las Sessions
    foreach (CANDIDATOS as $candidato) {
        crearSessionSiNoExiste("votos_".strtolower($candidato["candidato"]), 0);
    }

    $DNIs_registrados =  explode("|", $_SESSION["DNIs_registrados"]);
    $dni = $_POST["dni"];
    $voto = $_POST["voto"];
    $nombre_SESSION = "votos_".strtolower($_POST["voto"]);

    // verificar si no existe
    if (!in_array($dni, $DNIs_registrados)) {

        $voto_ant = $_SESSION[$nombre_SESSION];
        $voto_nuevo = intval($voto_ant) + 1;
        
        array_push($DNIs_registrados, $dni);
        updateSession("DNIs_registrados", implode("|", $DNIs_registrados));
        
        updateSession($nombre_SESSION, $voto_nuevo);

        echo "ok";
    }
    else
        echo "El Nro. de DNI ingresado ya voto, por favor volver a ingresar.";
}