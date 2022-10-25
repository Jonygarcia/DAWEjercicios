<!-- 006etapa.php: A partir de una edad muestra por pantalla:
bebé si tiene menos de 3 años
niño si tiene entre 3 y 12 años
adolescente entre 13 y 17 años
adulto entre 18 y 66
jubilado a partir de 67 -->

<?php 

$edad = $_GET['edad'];

if (!isset($edad)){
    echo "Para ejecutar este ejercicio introduce la clave edad con un valor en la URL</br>";
}

switch ($edad){
    case $edad < 0:
        echo "Edad incorrecta";
        break;
    case $edad < 3:
        echo "Bebé";
        break;
    case $edad < 13:
        echo "Niño";
        break;
    case $edad < 18:
        echo "Adolescente";
        break;
    case $edad < 67:
        echo "Adulto";
        break;
    default:
        echo "Jubilado";
}