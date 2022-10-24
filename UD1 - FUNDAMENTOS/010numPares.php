<!-- 010numPares.php: A partir del anterior, refactorizar para que funcione con 
inicio y fin. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>010numPares</title>
</head>
<body>
    <ul>
        <?php
            $inicio = $_GET['inicio'];
            $fin = $_GET['fin'];

            if (!isset($inicio) || !isset($fin)){
                echo "Para ejecutar este ejercicio introduce las claves inicio y fin con algún valor en la URL</br>";
            }

            for($i = $inicio; $i <= $fin; $i++){
                if ($i % 2 === 0){
                    echo "<li>$i</li>";
                }
            }
        ?>
    </ul> 
</body>
</html>