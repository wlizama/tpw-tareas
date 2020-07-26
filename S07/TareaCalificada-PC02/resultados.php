<?php
    include("./include/data.php"); 
    session_start();

    $total_votos = 0;
    foreach (CANDIDATOS as $candidato) {
        $total_votos += intval($_SESSION["votos_".strtolower($candidato["candidato"])]);
        
    }

    // calcular ganador mayor a 50%
    $ganador = "";
    foreach (CANDIDATOS as $candidato) {
        $votos = $_SESSION["votos_".strtolower($candidato["candidato"])];
        $porc = ($votos/$total_votos) * 100;
        if ($porc >= 50) {
            if ($ganador == "")
                $ganador = strtolower($candidato["candidato"]);
            else
                $ganador = "";
        }
    }

    // 2da vuelta
    $segun_vuelta = array();
    if ( $ganador == "") {
        foreach (CANDIDATOS as $candidato) {
            $votos = $_SESSION["votos_".strtolower($candidato["candidato"])];
            $porc = ($votos/$total_votos) * 100;
            
            $segun_vuelta[strtolower($candidato["candidato"])] = $porc;
            // array_push($segun_vuelta, strtolower($candidato["candidato"]), $porc);
            // $segun_vuelta[strtolower($candidato["candidato"])] = $porc;
        }
        asort($segun_vuelta);
        array_shift($segun_vuelta);
    }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PE - Lorem Ipsum</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Proceso electoral - Asociacion Lorem Ipsum</h1>
    </header>
    <main>
        <section class="resultados">
            <h2>Resultados</h2>
            <ul>
                <?php foreach (CANDIDATOS as $candidato) { ?>
                    <li class="resultado-item">
                        <img src="./images/<?php echo $candidato["imagen"]; ?>">
                        <div class="resultado-item-column">
                            <div>Candidato: <?php echo $candidato["candidato"]; ?></div>
                            <div>Grupo: <?php echo $candidato["grupo"]; ?></div>
                        </div>
                        <div class="resultado-item-column">
                        <?php
                            $votos = $_SESSION["votos_".strtolower($candidato["candidato"])];
                            $porc = ($votos/$total_votos) * 100;
                        ?>
                            <div>Votos obtenidos: <b><?php echo $votos; ?></b></div>
                            <div><b><?php echo $porc; ?> %</b></div>
                        <?php
                            if ($ganador == strtolower($candidato["candidato"])) {
                        ?>
                            <div style="color:green"><b>GANADOR</b></div>
                        <?php
                            }
                            else if ($ganador == "") {
                                if (array_key_exists(strtolower($candidato["candidato"]), $segun_vuelta)) {
                        ?>
                                <div style="color:peru"><b>A SEGUNDA VUELTA</b></div>
                        <?php
                                }
                            }
                        ?>
                    </li>
                <?php 
                }
                ?>
            </ul>
            <button id="btnRealizarNuevo" type="button" onclick="window.location = 'registro.php'">Realizar nueva votación</button>
        </section>
    </main>
    <footer>
        <span>&copy; Lizama Garcia Wilder H. - 2020 Todos los derechos reservados</span>
     </footer>
</body>
</html>