<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos recibidos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Datos de recibidos</h1>
        <div>
            Apellidos: <?php echo $_GET["apellidos"]?>
        </div>
        <div>
            Nombres: <?php echo $_GET["nombres"]?>
        </div>
        <div>
            <button type="button" onclick="history.back()">< Regresar</button>
        </div>
    </section>
</body>
</html>