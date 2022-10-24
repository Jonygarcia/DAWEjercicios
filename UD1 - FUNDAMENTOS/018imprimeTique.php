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
    <title>018imprimeTique</title>
</head>
<body>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio/Ud €</th>
            <th>Precio/Ud Ptas</th>
            <th>Total €</th>
            <th>Total Ptas</th>
        </thead>
        <tbody>
            <?php 
            // Incluimos funciones.php que es donde están ubicadas las funciones que vamos a utilizar
            include_once ('funciones.php');

            $productos = declararProductos();
            $precioTotal = 0;

            foreach ($productos as $producto => $infoProd)
            {
                $concatNombre = "cant" . $producto;
                $productos[$producto]["cantidad"] = (int)$_GET[$concatNombre];       
            }

            foreach($productos as $producto => $infoProd){
                if ($productos[$producto]["cantidad"] > 0)
                {
                    echo "<tr><td>$producto</td>
                        <td>" . $infoProd["cantidad"] . "</td>
                        <td>" . $infoProd["precio"] . "</td>
                        <td>" . conversionMoneda($infoProd["precio"]) . "</td>
                        <td>" . $infoProd["precio"] * $infoProd["cantidad"] . "</td>
                        <td>" . conversionMoneda($infoProd["precio"] * $infoProd["cantidad"]) . "</td></tr>";

                    $precioTotal += $infoProd["precio"] * $infoProd["cantidad"];
                }
            }

            echo "<tr><td colspan=4>TOTAL COMPRA: </td>
                    <td>" . $precioTotal . "</td>
                    <td>" . conversionMoneda($precioTotal) . "</td></tr>";
            ?>
        </tbody>
    </table>
</body>
</html>