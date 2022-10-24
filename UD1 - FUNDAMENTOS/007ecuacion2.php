<!-- 007ecuacion2.php: Crea un programa que resuelva una ecuación de 2º 
grado del tipo ax² + bx + c = 0. Ten en cuenta que puede tener 2, 1 o no 
tener solución dependiendo del valor del discriminante b²-4ac.Tip: Para 
calcular la raíz cuadrada deberás utilizar la función sqrt() -->

<?php 

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

if (!isset($a) || !isset($b) || !isset($c)){
    echo "Para ejecutar este ejercicio introduces la claves a, b y c con sus valores en la URL</br>";
}

$resultado1 = 0;
$resultado2 = 0;

$discriminante = $b**2 - (4 * $a * $c);

echo $a."x² + ".$b."x + ".$c;

switch ($discriminante){

    case $discriminante > 0:
        if ($a == 0){
            echo " no se puede realizar porque a no puede ser 0";
        } else {
            echo " tiene dos soluciones: <br/>";
            $resultado1 = (-($b) + sqrt($discriminante)) / (2 * $a);
            echo "Solución 1: $resultado1<br/>";
            $resultado2 = (-($b) - sqrt($discriminante)) / (2 * $a);
            echo "Solución 2: $resultado2<br/>";
        }    
        break;

    case 0:
        echo " tiene una solución: ".-($b / (2 * $a));
        break;

    default:
        echo " no tiene soluciones reales";
}



