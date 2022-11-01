/*008conversionesTipos.js/.html: ¿Cuáles son los resultados de estas expresiones?
"" - 1 + 0
true + false
6 / "3"
"2" * "3"
4 + 5 + "px"
"$" + 4 + 5
"4" - 2
"4px" - 2
"  -9  " + 5
"  -9  " - 5
null + 1
undefined + 1
" \t \n" - 2*/
"use strict";

alert("" + 1 + 0); // 10 -> Muestra el 10 como String concatenando 1 y 0
alert("" - 1 + 0); // -1 -> Muestra el -1 como String
alert(true + false); // 1 -> Toma el valor del primero (true)
alert(6 / "3"); // 2 -> Se convierten a valores numéricos al usar una función matemática y se realiza la división
alert("2" * "3"); // 6 -> Se convierten a valores numéricos al usar una función matemática y se realiza la multiplicación
alert(4 + 5 + "px"); // 9px -> Realiza la suma de los números y concatena el String
alert("$" + 4 + 5); // $45 -> Concatena la expresión completa
alert("4" - 2); // 2 -> Toma el 4 como un número al tener el operador -
alert("4px" - 2); // NaN -> No puede tomar 4px como un número por tanto no puede realizar la operación matemática
alert("  -9  " + 5); // -9 5 -> Concatena la expresión
alert("  -9  " - 5); // -14 -> Toma el valor del String como numérico y realiza la operación matemática
alert(null + 1); // 1 -> El valor de null es 0, por tanto el resultado es 1
alert(undefined + 1); // NaN -> No puede sumar ni concatenar algo no definido
alert(" \t \n" - 2); // -2 -> Devuelve un -2 como String realizando la tabulación y el salto de línea
