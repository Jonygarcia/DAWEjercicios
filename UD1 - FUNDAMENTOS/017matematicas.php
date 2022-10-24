<!-- 017matematicas.php: Añade las siguientes funciones:
digitos(int $num): int ‚ -> devuelve la cantidad de dígitos de un número.
digitoN(int $num, int $pos): int ‚ -> devuelve el digito que ocupa, 
empezando por la izquierda, la posición $pos.
quitaPorDetras(int $num, int $cant): int ‚ -> le quita por detrás (derecha) 
$cant digitos.
quitaPorDelante(int $num, int $cant): int ‚ -> le quita por delante (izquierda) 
$cant digitos.
Para probar las funciones, haz uso tanto de paso de argumentos 
posicionales como argumentos con nombre. -->

<?php 

echo "El número '8765' tiene ".digitos(8765)." dígitos</br>";
echo "La posición '2' del número '67895' contiene el dígito: ".digitoN(pos: 2, num: 67895)."</br>";
echo "Si le quitamos '3' dígitos por detrás a '12345' nos quedaría: ".quitaPorDetras(12345, 3)."</br>";
echo "Si le quitamos '3' dígitos por delante a '56789' nos quedaría: ".quitaPorDelante(cant: 3, num: 56789)."</br>";

function digitos(int $num) : int 
{
    $digitos = 0;

    while (intval($num) != 0){
        $num /= 10;
        $digitos++;
    }

    return $digitos;
}

function digitoN(int $num, int $pos) : int
{
    $array = str_split($num);

    if ($pos > 0 && $pos <= count($array)){
        $pos -= 1;

        $digito = $array[$pos];
        
        return $digito;
    } else {
        return -1;
    }
}

function quitaPorDetras(int $num, int $cant) : int
{
    $array = str_split($num);
    $nuevoNum = 0;
    
    if ($cant <= count($array) && $cant >= 0){
        while ($cant != 0){
            array_pop($array);
            $cant--;
        }
       
        foreach ($array as $numeros){
            $nuevoNum .= $numeros;
        }
    }

    return $nuevoNum;
}

function quitaPorDelante(int $num, int $cant) : int 
{
    $array = str_split($num);
    $nuevoNum = 0;
    
    if ($cant <= count($array) && $cant >= 0){
        for ($i = 0; $i < $cant; $i++){
            unset($array[$i]);
        }

        foreach ($array as $numeros){
            $nuevoNum .= $numeros;
        }
    }

    return $nuevoNum;
}