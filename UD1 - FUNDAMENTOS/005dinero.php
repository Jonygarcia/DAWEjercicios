<!-- 005dinero.php: A partir de una cantidad de dinero, mostrar su 
descomposición en billetes (500, 200, 100, 50, 20, 10, 5) y monedas (2, 1), 
para que el número de elementos sea mínimo. No se utilizar ninguna 
instrucción condicional. Por ejemplo, al introducir 138 debe mostrar:1 billete de 100
0 billete de 50
1 billete de 20
1 billete de 10
1 billete de 5
1 moneda de 2
2 monedas de 1
Tip: Puedes forzar a realizar la división entera mediante la función 
intdiv($dividendo, $divisor) o pasar un número flotante a entero puedes 
usar la función intval(). -->

<?php 

$cantidad = $_GET['cantidad'];
$dinero = ["billete" => [500, 200, 100, 50, 20, 10, 5], "moneda" => [2, 1]];

if (!isset($cantidad)){
    echo "Para ejecutar este ejercicio introduce la clave cantidad con un valor en la URL</br>";
}

/* Asignamos los valores del array y comprobamos, mientras la cantidad de dinero sea mayor, sacaremos el número del billete 
o moneda, cuando sea menor, pasará a comprobar el siguiente valor, así hasta agotar la cantidad de dinero */
foreach($dinero as $tipoDinero => $valores){
    foreach($valores as $valor){
        if($cantidad >= $valor){
            $pintarTipo = (intdiv($cantidad, $valor) > 1) ? $tipoDinero."s" : $tipoDinero;
            echo intdiv($cantidad, $valor)." ".$pintarTipo." de ".$valor."€<br/>";
            $cantidad = $cantidad % $valor; 
        }
    }
}

