<!-- 013formulario.html y 013cuadrada.php: Basándote en el ejercicio anterior, 
rellena la tabla de manera que solo los bordes tengan contenido, 
quedándose el resto de las celdas vacías. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>013cuadrada</title>
</head>
<body>
    <table>
        <?php
            $filas = $_GET['filas'];
            $columnas = $_GET['columnas'];

            for($i = 1; $i <= $filas; $i++){
                echo "<tr>";
                for($j = 1; $j <= $columnas; $j++){
                    if($i == 1 || $i == $filas || $j == 1 || $j == $columnas){
                        echo "<td>".$i.", ".$j."</td>";
                    } else {
                        echo "<td></td>";
                    }
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>