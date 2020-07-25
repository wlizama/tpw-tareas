<?php
    if (isset($_POST["usuario"])) {
        if (trim($_POST["usuario"]) !== "") {
            setcookie("usuario", $_POST["usuario"], time() + 60);
            header('Location: ./solo-login.php');
            exit;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- 
Los estudiantes realizan ejercicios sobre sesiones y cookies.
1.  Creación de sesiones en php
En este ejercicio se pide crear un formulario de inicio de sesión.
Deberá crear tres páginas:
Página 1: Donde estará el formulario de inicio de sesión (donde solo se ingresará el nombre del usuario).
Página 2: Esta página será vista solo a los usuarios que estén "logeados".
Página 3: Esta página será para cerrar la sesión.
2. Creación de Cookies
Escriba una página que permita crear una cookie de duración limitada, comprobar el 
estado de la cookie y destruirla. La duración de la cookie es de máximo 60 segundos.
Remitir su archivo por Canvas. Verificar la funcionalidad de cada una de las respuestas
antes de remitir su entregable.
-->
    <section class="main">
        <form class="content" action="./index.php" method="post">
            <h1>Inicio de sessión <?php echo $_POST["usuario"]?></h1>
            <div class="content-block">
                <label for="txtUsuario">Nombre de usuario:</label>
                <input id="txtUsuario" name="usuario" type="text" />
            </div>
            <div class="content-block">
                <button type="submit">Ingresar</button>
            </div>
        </form>
    </section>
</body>
</html>