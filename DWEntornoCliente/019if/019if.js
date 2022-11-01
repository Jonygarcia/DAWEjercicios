/*019if.js/.html: ¿Cuáles de estos alerts va a ejecutarse? ¿Cuáles serán los resultados de 
las expresiones dentro de if(...)?
if (-1 || 0) alert( "primero" );
if (-1 && 0) alert( "segundo" );
if (null || -1 && 1) alert( "tercero" );*/
"use strict";

if (-1 || 0) alert("primero"); // Se ejecuta, entra por el -1 que sería un valor verdadero y el 0 lo toma como falso.
if (-1 && 0) alert("segundo"); // No se ejecuta, lo compara con AND y las dos condiciones no son verdaderas.
if (null || (-1 && 1)) alert("tercero"); // Se ejecuta, null sería falso, lo compara con el operador OR con (-1 && 1) que ambas son verdaderas por tanto es true.