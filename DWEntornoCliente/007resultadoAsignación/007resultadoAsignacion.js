/*007resultadoAsignación.js/.html ¿Cuáles son los valores de ‘a’ y ‘x’ después del código 
a continuación?
let a = 2;
let x = 1 + (a *= 2);*/
"use strict";

let a = 2;
let x = 1 + (a *= 2);

alert(`x = ${x}, a = ${a}`); // x = 5 , a = 4 debido a que asigna a la variable 'a' el resultado de a * 2
