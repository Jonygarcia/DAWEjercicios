/* 009corregirAdicion.js/.html: Aquí hay un código que le pide al usuario dos números y 
muestra su suma. Funciona incorrectamente. El resultado en el ejemplo a continuación 
es 12 (para valores de captura predeterminados). ¿Por qué? Arréglalo. El resultado 
debería ser 3.
let a = prompt("¿Primer número?", 1);
let b = prompt("¿Segundo número?", 2);
alert(a + b); // 12 */
"use strict";

let a = prompt("¿Primer número?", 1);
let b = prompt("¿Segundo número?", 2);

/*Debemos convertirlo a number a la hora de mostrar ya que al leer el valor desde
un campo de texto lo interpreta como tal, además al usar el + lo concatena*/
alert(Number(a) + Number(b));
