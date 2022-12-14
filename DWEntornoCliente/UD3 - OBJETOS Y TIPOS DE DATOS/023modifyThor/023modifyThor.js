/*023modifyThor.js/.html: Contesta los siguientes comentarios con respecto a la cadena 
que contiene la variable thor: */
"use strict";

let thor = "Thor es el hijo de Odín";

//? Largo de la cadena
alert(thor.length); // 23

//? Encontrar la letra o
let arrayThor = thor.toLowerCase().split("");

let arrCount = arrayThor.reduce((arr, value, i) => {
    if (value === "o") arr.push(i);
    return arr;
}, []);

alert(arrCount); // 2, 14, 19 son las posiciones donde hay una vocal o, no case sensitive.

//? Encontrar el carácter que ocupa la posición 3
alert(thor.charAt(3)); // r

//? ¿Qué carácter ocupa la posición 1?
alert(thor.charAt(1)); // h

//? Trocea la cadena usando los espacios en blanco
let strArray = thor.split(" "); // ['Thor', 'es', 'el', 'hijo', 'de', 'Odín']

console.log(strArray);

//? Reemplaza Thor por Loki
thor = thor.replace("Thor", "Loki"); // Loki es el hijo de Odín

alert(thor);

//? Recorta la cadena para que devuelva la palabra Odín
let strcut = thor.slice(
    thor.indexOf("Odín"),
    thor.indexOf("Odín") + "Odín".length
); // Odín

alert(strcut);

//? ¿Puedes encontrar la letra a? Demuéstralo
alert(thor.indexOf("a")); // -1 , no hay ningún caracter "a" en la cadena

//? Pon la mitad de la cadena en minúsculas (Sin usar las posiciones de 0 a 11)
let cadenaMitad = thor.substring(0, thor.length / 2).toLowerCase();
cadenaMitad += thor.substring(thor.length / 2).toUpperCase();

alert(cadenaMitad); // thor es el HIJO DE ODÍN
