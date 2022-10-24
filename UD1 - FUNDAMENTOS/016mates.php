<!-- 016mates.php: Genera un array aleatorio de 33 elementos con números 
comprendidos entre el 0 y 100 y calcula: El mayor, el menor y la media. -->

<?php 

$array = [];
$suma = 0;

for($i = 0; $i < 33; $i++){
    $random = rand(0, 100);
    array_push($array, $random);
}

$mayor = max($array);
$menor = min($array);
$media = array_sum($array) / count($array);

echo "El número mayor es: $mayor </br>";
echo "El número menor es: $menor </br>";
echo "La media de los números es: $media </br>";