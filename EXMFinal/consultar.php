<?php
    include("./funciones.php");

    if (isset($_POST["codigo"])) {
        $con = conectar();
        $query = "INSERT INTO tbMedicina VALUES('".$_POST["descripcion"]."', '".$_POST["anho"]."');";
        $result = mysqli_query($con, $query);
        mysqli_close($con);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar</title>
</head>
<body>
        <table>
            <thead>
                <tr>
                    <td>Datos</td>
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
</body>
</html>