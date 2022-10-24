<!-- 015mof.php: Rellena un array de 100 elementos de manera aleatoria con 
valores M o F (por ejemplo ["M", "M", "F", "M", ...]). Una vez completado, 
vuelve a recorrerlo y calcula cuantos elementos hay de cada uno de los 
valores almacenando el resultado en un array asociativo ['M' => 44, 'F' => 
66] (no utilices variables para contar las M o las F). Finalmente, muestra el 
resultado por pantalla. -->

<?php 

$array = [];
$asociativo = ["M" => 0, "F" => 0];

for($i = 0; $i < 100; $i++){
    $random = rand(0, 1);
    $valor = ($random == 0) ? "M" : "F";
    array_push($array, $valor);
}

/* El enunciado especifica que volvamos a recorrer el array para contar,
pero se podría hacer todo en el mismo bucle for */
for($i = 0; $i < 100; $i++){
    $asociativo[$array[$i]] += 1;
}

print_r($asociativo);