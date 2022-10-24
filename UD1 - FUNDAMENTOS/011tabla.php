<!-- 011tabla.php: Muestra dentro de una tabla HTML la tabla de multiplicar del 
número que reciba como parámetro. Utiliza <thead> con sus respectivos 
<th> y <tbody> para dibujar la tabla. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>011tabla</title>
</head>
<body>
    <table>
        <thead>
            <th>A</th>
            <th>* B</th>
            <th>= A*B</th>
        </thead>
        <tbody>
            <?php
                $numero = $_GET['num'];

                if (!isset($numero)){
                    echo "Para ejecutar este ejercicio introduce la clave numero con un valor en la URL</br>";
                }

                for($i = 1; $i <= 10; $i++){
                    echo   "<tr><td>".$numero."</td>
                            <td>* ".$i."</td>
                            <td>= ".$numero * $i."</td></tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>