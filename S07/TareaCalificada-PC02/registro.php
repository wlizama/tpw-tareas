<?php
    include("./include/data.php");
    // eliminar   al ingresar a la página
    session_start();

    unset($_SESSION["DNIs_registrados"]);
    foreach (CANDIDATOS as $candidato) {
        unset($_SESSION["votos_".strtolower($candidato["candidato"])]);
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
        <section id="sectRegistro" class="registro">
            <div>
                <label for="txtDNI">Digite DNI</label>
                <input id="txtDNI" type="text" maxlength="8" name="dni" />
                <button id="btnValidaDNI" type="button">Validar DNI</button>
            </div>
        </section>
        <section id="sectCandidatos" class="candidatos">
            <h2>Elija un candidato</h2>
            <ul>
                <?php foreach (CANDIDATOS as $candidato) { ?>
                    <li 
                        class="candidato-item"
                        data-candidato="<?php echo $candidato["candidato"]; ?>"
                        data-grupo="<?php echo $candidato["grupo"]; ?>"
                    >
                        <img src="./images/<?php echo $candidato["imagen"]; ?>">
                        <div>
                            Candidato: <?php echo $candidato["candidato"]; ?>
                            <br />
                            Grupo: <?php echo $candidato["grupo"]; ?>
                        </div>
                    </li>
                <?php 
                } 
                ?>
            </ul>
        </section>
        <section class="sectboton-result">
            <button id="btnVerResult" type="button">Ver Resultados</button>
        </section>
    </main>
    <footer>
        <span>&copy; Lizama Garcia Wilder H. - 2020 Todos los derechos reservados</span>
     </footer>
     <script src="script.js"></script>
</body>
</html>