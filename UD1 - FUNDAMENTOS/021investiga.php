<!-- 021investiga.php: Investiga las siguientes funciones de cadena (explica para 
qué sirven mediante comentarios, y programa un pequeño ejemplo de cada 
una de ellas): ucwords, strrev, str_repeat y md5. -->

<?php 

/* UCWORDS -> Convierte a mayúsculas el primer caracter de cada palabra de una cadena
se le puede añadir el parámetro $delimiters para separar palabras, aunque por defecto
son espacios, avance de página, nueva línea, tabulación y retorno de carro */ 

echo ucwords("no sabía lo que era retorno de carro.</br>");

/* STRREV -> Invierte una cadena de texto */

echo strrev("Hola soy una cadena invertida.");

/* STR_REPEAT -> Repite el string el número de veces que indiquemos str_repeat($str, $multiplicador) */

echo "<br>";
echo str_repeat("Vamo' a repetirno</br>", 4);

/* MD5 -> Calcula el hash de un String, aunque no es recomendable su uso para contraseñas */

echo md5("Hola como estamos");
