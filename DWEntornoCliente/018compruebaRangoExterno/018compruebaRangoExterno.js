/*018compruebaRangoExterno.js/.html: Escribe una condición if para comprobar que 
age NO está entre 18 y 99 inclusive. Crea dos variantes: la primera usando NOT, y la 
segunda sin usarlo.*/
"use strict";

let messsage;
let age;

if (!(age >= 18 && age <= 99)) message = "Está fuera del rango";

if (age < 18 || age > 99) message = "Está fuera del rango";
