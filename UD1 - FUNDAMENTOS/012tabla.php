<!-- 012formulario.html y 012tabla.php: A partir de un número de filas y 
columnas, crear una tabla con ese tamaño. Las celdas deben estar 
rellenadas con los valores de las coordenadas de cada celda. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>012tabla</title>
</head>
<body>
    <table>
        <?php
            $filas = $_GET['filas'];
            $columnas = $_GET['columnas'];

            for($i = 1; $i <= $filas; $i++){
                echo "<tr>";
                for($j = 1; $j <= $columnas; $j++){
                    echo "<td>".$i.", ".$j."</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>