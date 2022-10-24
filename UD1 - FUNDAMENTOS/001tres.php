<!-- 001tres.php: muestra 3 frases cada una en un párrafo utilizando las tres 
posibilidades que existen de mostrar contenido. Tras ello, introduce dos 
comentarios, uno de bloque y otro de una línea. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>001tres</title>
</head>
<body>
    <p>
        <?php
            echo "Primera forma de mostrar contenido";
        ?>
    </p>
    <p>
        <?php
            print "Segunda forma de mostrar contenido";
        ?>
    </p>
    <p>
        <?= "Tercera forma de mostrar contenido"?>
    </p>
    <?php
        /* Así sería un 
        comentario de bloque */

        // Y así sería un comentario de línea
    ?>
</body>
</html>





