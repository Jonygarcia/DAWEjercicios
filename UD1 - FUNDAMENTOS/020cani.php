<!-- 020cani.php: EsCrIbE uNa FuNcIóN qUe TrAnSfOrMe UnA cAdEnA eN cAnI. -->

<?php 

$cadena = "esto es un ejemplo de como escribir una función que transforme una frase en modo cani.";

echo textoCani($cadena);
function textoCani($cadena){
    for ($i=0; $i < strlen($cadena); $i++) {
        ($i % 2 == 0) ? $cadena[$i] = strtoupper($cadena[$i]) : $cadena[$i] = strtolower($cadena[$i]);
    }
    return $cadena;
}