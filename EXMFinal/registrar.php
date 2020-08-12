<?php
    include("./funciones.php");

    if (isset($_POST["registrar"])) {
        // echo "here";
        $con = conectar();
        $query = "INSERT INTO tbMedicina VALUES(0, '".$_POST["descripcion"]."', '".$_POST["anho"]."');";
        $result = mysqli_query($con, $query);
        mysqli_close($con);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>Registrar medicina</h1>
    <form method="post" action="registrar.php">
        <input type="hidden" name="registrar" value="ok" />
        <table>
            <tr>
                <td>Código</td>
                <td><input name="codigo" disabled value="" /></td>
            </tr>
            <tr>
                <td>Descripción</td>
                <td><input name="descripcion" maxsize="20" /></td>
            </tr>
            <tr>
                <td>Año</td>
                <td><input type="number" name="anho" /></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">Grabar</button></td>
            </tr>
            <tr>
                <td colspan="2"><button type="reset">Reiniciar</button></td>
            </tr>
            <tr>
                <td colspan="2"><button type="Inicio">Inicio</button></td>
            </tr>
        </table>
    </form>
</body>
</html>