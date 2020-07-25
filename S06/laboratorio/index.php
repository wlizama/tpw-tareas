<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de datos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form id="frmDatos" action="./datos.php" method="get">
        <h1>Datos de usuario</h1>
        <div>
            <label for="txtApellidos">Apellidos</label>
            <input id="txtApellidos" name="apellidos" type="text">
        </div>
        <div>
            <label for="txtNombres">Nombres</label>
            <input id="txtNombres" name="nombres" type="text">
        </div>
        <div>
            <button type="submit">Enviar datos</button>
        </div>
    </form>
    <script src="./script.js"></script>
</body>
</html>