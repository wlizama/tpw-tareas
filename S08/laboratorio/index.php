<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="main">
        <form class="content" action="./index2.php" method="post">
            <h1>Inicio de sessión</h1>
            <div class="content-block">
                <label for="txtUsuario">Nombre de usuario:</label>
                <input id="txtUsuario" name="usuario" type="text" />
                <input id="txtPassword" name="password" type="password" />
            </div>
            <div class="content-block">
                <button type="submit">Ingresar</button>
            </div>
        </form>
    </section>
</body>
</html>