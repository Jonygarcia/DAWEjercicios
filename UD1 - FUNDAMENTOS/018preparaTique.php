<!-- 018preparaTique.php: A partir de una cantidad de productos, leer el 
nombre y coste de la cantidad de productos indicados (la cantidad, se 
recibe mediante un parámetro GET vía URL).
018imprimeTique.php: Tras leer los datos del tique de compra, enumera en 
una tabla los productos, con su precio en euros y pesetas, y finalmente, en 
una última fila, totalizar en ambas monedas. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>018preparaTique</title>
</head>
<body>
    <form action="018imprimeTique.php" method="GET">
        <table>
            <thead>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </thead>
            <tbody>
                <?php
                // Incluimos funciones.php que es donde están ubicadas las funciones que vamos a utilizar
                include_once ('funciones.php');

                $productos = declararProductos();

                printForm($productos);
                ?>
            </tbody>
        </table>
        <input type="submit" name="Enviar">
    </form>
</body>
</html>