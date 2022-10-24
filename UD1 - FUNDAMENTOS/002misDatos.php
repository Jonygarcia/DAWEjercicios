<!-- 002misDatos.php: Escribe un programa que almacene en variables tu 
nombre, primer apellido, segundo apellido, email, año en el que naciste y 
móvil. Luego muéstralos por pantalla dentro de una tabla. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>002misDatos</title>
    <?php
        $nombre = "Jonatan";
        $apellido1 = "García";
        $apellido2 = "Barrera";
        $email = "jonatangarciabarrera@gmail.com";
        $yearNac = "1993";
        $movil = "605558551";
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