<!-- 003misDatos.html y 003misDatos.php: Es el mismo ejercicio anterior, pero 
separando la lógica. En el html crearemos el formulario para introducir los 
datos, y luego recogemos los datos y generamos la tabla en el segundo 
archivo. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>003misDatos</title>
    <?php
        $nombre = $_GET['nombre'];
        $apellido1 = $_GET['apellido1'];
        $apellido2 = $_GET['apellido2'];
        $email = $_GET['email'];
        $yearNac = $_GET['yearNac'];
        $movil = $_GET['movil'];
    ?>
</head>
<body>
    <table>
        <tr>
            <td>Nombre:</td>
            <td>
                <?= $nombre?>
            </td>
        </tr>
        <tr>
            <td>Primer Apellido:</td>
            <td>
                <?= $apellido1?>
            </td>
        </tr>
        <tr>
            <td>Segundo Apellido:</td>
            <td>
                <?= $apellido2?>
            </td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>
                <?= $email?>
            </td>
        </tr>
        <tr>
            <td>Año nacimiento:</td>
            <td>
                <?= $yearNac?>
            </td>
        </tr>
        <tr>
            <td>Móvil:</td>
            <td>
                <?= $movil?>
            </td>
        </tr>
    </table>
</body>
</html>