<?php
    setcookie("usuario", "", -3600);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log out</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="main">
        <form class="content" action="./index.php" method="post">
            <h1>Página cerrar sessión</h1>
            
            <div class="content-block text-center">
                <h4>Sessión cerrada</h4>
            </div>
            <div class="content-block">
                <button type="submit">Iniciar sessión</button>
            </div>
        </form>
    </section>
</body>
</html>