/*018compruebaRangoExterno.js/.html: Escribe una condición if para comprobar que 
age NO está entre 18 y 99 inclusive. Crea dos variantes: la primera usando NOT, y la 
segunda sin usarlo.*/
"use strict";

let age = prompt("Introduzca la edad:");

if (!(age >= 18 && age <= 99)) alert("Está fuera del rango");

if (age < 18 || age > 99) alert("Está fuera del rango");
