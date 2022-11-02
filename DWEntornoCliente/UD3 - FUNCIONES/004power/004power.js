/*004power.js/.html: Función pow(x,n): Escriba la función pow(x,n) que devuelva x como 
potencia de n. O, en otras palabras, multiplique x por si mismo n veces y devuelva el 
resultado.
pow(3, 2) = 3 * 3 = 9
pow(3, 3) = 3 * 3 * 3 = 27
pow(1, 100) = 1 * 1 * ...* 1 = 1
Cree una página web que solicite x y n, y luego muestre el resultado de pow(x,n).
Nota: La función solo debe admitir valores naturales de n: enteros desde 1.*/
"use strict";

let x = +prompt("Introduzca la base de la potencia:");
let n = +prompt("Introduzca el exponente de la potencia:");

while (n < 1) {
    n = +prompt("El exponente no puede ser menor que 1, introdúzcalo de nuevo:");
}

let pow = (x, n) => x ** n;

alert(pow(x, n));
