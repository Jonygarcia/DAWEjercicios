<!-- A partir de los archivos creados en el ejercicio anterior, crea una plantilla 
mediante includes: 019preparaCompra.php: similar a 019preparaTique.php, 
pero separando el encabezado (Supermercado Lodi en h1) y el pie (Tu 
supermercado de confianza) en ficheros externos y referenciando a ellos 
mediante include.
019listaCompra.php: recibe los datos del anterior, y reutiliza parte de 
019imprimeTiquetCompra.php cambiando la tabla por una lista 
desordenada de los productos junto a su precio. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>019preparaCompra</title>
</head>
<body>
    <?php include 'encabezadoCompra.php' ?>
    <form action="019listaCompra.php" method="GET">
        <table>
            <thead>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </thead>
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
    <?php include 'footerCompra.php' ?>
</body>
</html>