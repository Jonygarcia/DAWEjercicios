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

// a = 2
// b = 2
// c = 2
// d = 1