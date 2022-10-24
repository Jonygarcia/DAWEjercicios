<!-- 022generaPass.php: Crea una función que, a partir de un tamaño, genere 
una contraseña aleatoria compuesta de letras y dígitos de manera aleatoria. -->

<?php 


$sizePass = $_GET['size'];

if (!isset($sizePass)){
    echo "<br>Se ha establecido una longitud por defecto de 8 caracteres</br>
    Si desea una longitud concreta introduzca la clave size con el tamaño deseado en la URL</br>";
    $sizePass = 8;
}

echo generaPass($sizePass);

function generaPass($sizePass){
    $caracteres = "abcdefghijklmnopqrstuvwxyz0123456789";
    $password = "";

    for ($i=0; $i < $sizePass ; $i++) { 
        $password .= substr($caracteres, rand(0, strlen($caracteres)), 1);
    }

    return $password;
}
