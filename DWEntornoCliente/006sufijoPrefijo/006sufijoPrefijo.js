/*006sufijoPrefijo.js/.html: ¿Cuáles son los valores finales de todas las variables a, b, c y 
d después del código a continuación?
let a = 1, b = 1;
let c = ++a;  ?
let d = b++;  ?*/
"use strict";

let a = 1, b = 1;
let c = ++a;
let d = b++;

alert(`a = ${a}, b = ${b}, c = ${c}, d = ${d}`);

// a = 2 -> se suma a + 1 antes de asignar su valor a c, por tanto cambia su valor.
// b = 2 -> se suma b + 1 después de asignar su valor a d, por tanto cambia su valor.
// c = 2 -> a vale 2 antes de ser asignado a c.
// d = 1 -> d toma el valor de b, b se suma a 1 después de que d tome su valor.