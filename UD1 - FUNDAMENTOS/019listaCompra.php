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
    <title>019listaCompra</title>
</head>
<body>
    <?php include 'encabezadoCompra.php'?>
    <ul>
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
                echo "<li>Producto: $producto</li>
                    <ul>
                        <li>Cantidad: " . $infoProd["cantidad"] . "</li>
                        <li>Precio Ud/€: " . $infoProd["precio"] . " €</li>
                        <li>Precio Ud/ptas: " . conversionMoneda($infoProd["precio"]) . " ptas.</li>
                        <li>Precio Total/€: " . $infoProd["precio"] * $infoProd["cantidad"] . " €</li>
                        <li>Precio Total/ptas: " . conversionMoneda($infoProd["precio"] * $infoProd["cantidad"]) . " ptas.</li>
                    </ul>";   

                $precioTotal += $infoProd["precio"] * $infoProd["cantidad"];
            }
        }

        echo "<li>Precio Total Compra: </li>
                <ul>
                    <li>" . $precioTotal . " €</li>
                    <li>" . conversionMoneda($precioTotal) . " ptas.</li>
                </ul>";
        ?>
    </ul>
    <?php include 'footerCompra.php'?>
</body>
</html>