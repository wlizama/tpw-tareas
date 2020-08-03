<?php
include('./funciones.php');

if (isset($_POST["accionEliminar"])) {
    eliminarUsuario($_POST["accionEliminar"]);
}
elseif (isset($_POST["accionNuevo"])) {
    if ($_POST["accionNuevo"] == "insertar") {
        if (isset($_POST["usuario"]) && isset($_POST["password"])) {
            insertarUsuario($_POST["usuario"], $_POST["password"]);
            header("Location: ./registro.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="main">
        <form class="registro-content" action="./registro.php" method="post">
            <div class="head">
                <h1>Lista de usuarios</h1>
                <button type="submit" name="accionNuevo" value="mostrarFrmNuevo">Agregar nuevo</button>
            </div>
<?php
if (isset($_POST["accionNuevo"])) {
?>
            <div class="content-block">
                <label for="txtUsuario">Nuevo usuario:</label>
                <input id="txtUsuario" name="usuario" type="text" placeholder="Nombre" />
                <input id="txtPassword" name="password" type="password" placeholder="Contraseña" />
            </div>
            <div class="content-block">
                <button type="submit" name="accionNuevo" value="insertar">Agregar</button>
            </div>
<?php
}
else {
?>
<?php
    $datos = getListaUsuarios();
?>
            <table>
                <thead>
                    <tr>
                        <td>Usuario</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
<?php
    if ($datos->num_rows > 0) {
        while ($row = mysqli_fetch_array($datos)) {
?>
                <tr>
                    <td><?php echo $row["nombre"];?></td>
                    <td><button type="submit" name="accionEliminar" value=<?php echo $row["nombre"];?>>Eliminar</button></td>
                </tr>
<?php
        }
    }
    else {
?>
                <tr>
                    <td colspan="2">No hay datos para mostrar</td>
                </tr>
<?php
    }
}
?>
                </tbody>
            </table>
        </form>
    </section>
</body>
</html>