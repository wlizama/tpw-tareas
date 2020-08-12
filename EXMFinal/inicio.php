<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exm. final</title>
</head>
<body>
<!-- 
    Elaborar una aplicación web PHP con conexión a una base de datos
    MySQL “bdFarmacia” que tenga una tabla  "tbMedicina" con: codigo int (PK), descripcion varchar(20), año_caducidad int; y que cuente con las páginas web:

    (2 puntos) Página “inicio.php” que muestra dos enlaces: “Registrar medicina” y “Consultar medicina”.
    (4 puntos) Página “registrar.php” con un formulario para registrar los datos de las medicinas (código, descripción y año de caducidad) y tres botones “Grabar”, “Reiniciar” e “Ir a inicio”
    (2 puntos) Página “consultar.php” que muestra los datos de todas las medicinas y un botón “Ir a Inicio” pero, si no hubiera medicinas vigentes (no caducadas)…
    (2 puntos) ... automáticamente debe mostrar la página “registrar.php” para registrar una nueva medicina.

    Debe considerar servidor local, usuario "root"  y password ""  predeterminados de mysql.
    Colocar todos los archivos de la aplicación (incluye script de la base de datos) en una carpeta nominada con sus apellidos y comprimir para enviar. 
-->

    <h1>Farmacia</h1>
    <div>
    <a href="registrar.php">Registrar medicina</a>
    <br>
    <br>
    <a href="consultar.php">Consultar medicina</a>
    </div>
</body>
</html>