<!-- 004edad.php: Sabiendo la edad de una persona, mostrar la edad que 
tendrá dentro de 10 años y hace 10 años. Además, muestra qué año será en 
cada uno de los casos. Finalmente, muestra el año de jubilación suponiendo 
que trabajarás hasta los 67 años. En este caso, no hace falta que 
previamente crees un formulario, puedes probar el ejercicio vía URL: 
004edad.php?edad=33. Tip: $anyoActual = date("Y"); -->

<?php 

$edad = $_GET['edad'];
$actualYear = date('Y');

if (!isset($edad)){
    echo "Para ejecutar este ejercicio introduce la clave edad con un valor en la URL</br>";
}

if ($edad - 10 <= 0){
    echo "En ".($actualYear - 10)." la persona no había nacido<br/>";
} else {
    echo "En ".($actualYear - 10)." la persona tenía ".($edad - 10)." años<br/>";
}

echo "En ".($actualYear + 10)." la persona tendrá ".($edad + 10)." años<br/>";

if($edad <= 67){
    $tiempoJubilacion = 67 - $edad;

    echo "La persona se jubilará en ".($actualYear + $tiempoJubilacion);
} else {
    echo "La persona ya está jubilada";
}

