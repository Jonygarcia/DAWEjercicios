/*004compruebaComillas.js/.html: ¿Cuál es la salida del script? Piénsalo y combruébalo.
let name = "Peter Parker";
alert( `Hola ${1}` ); ?
alert( `Hola ${"name"}` ); ?
alert( `Hola ${name}` ); ? */
"use strict";

let name = "Peter Parker";

alert( `Hola ${1}` ); // Muestra: Hola 1
alert(`Hola ${"name"}`); // Muestra: Hola name
alert(`Hola ${name}`); // Muestra: Hola y el contenido de la variable name