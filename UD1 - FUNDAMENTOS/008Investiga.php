<!-- 008Investiga para qué sirve la instrucción match(), disponible desde PHP8 
(https://www.php.net/manual/es/control-structures.match.php). Explica 
con un par de líneas su propósito y mediante código demuestra su uso. -->

<?php 

/* El match es un método de comprobación similar al método switch pero simplificado,
la comparación realizada por el match es de identidad y no de igualdad, por lo que 
la comprobación comprueba si coincide el tipo de dato con el que estamos trabajando.
El match nos retorna un valor pese a que no es necesario que sea usado.*/

$vocal = "o";

$mensaje = match($vocal){
    "a" => 'La vocal es la a',
    "e" => 'La vocal es la e',
    "i" => 'La vocal es la i',
    "o" => 'La vocal es la o',
    "u"=> 'La vocal es la u',
    default => 'No es una vocal'
};

echo $mensaje;

    
    
