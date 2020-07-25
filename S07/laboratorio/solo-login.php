<?php
    if (!isset($_COOKIE["usuario"])) {
        header('Location: ./cerrar-session.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página privada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="main">
        <form class="content" action="./cerrar-session.php" method="post">
            <h1>Página con acceso privado</h1>
            
            <div class="content-block text-center">
                <h4>
                    Inicio sessión con usuario: 
                    <i>@<?php echo $_COOKIE["usuario"]; ?></i>
                </h4>
            </div>
            <div class="content-block">
                <button type="submit">Cerrar sessión</button>
            </div>
        </form>
    </section>
</body>
</html>