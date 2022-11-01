/*022numPrimos.js/.html: Un número entero mayor que 1 es llamado primo si no puede 
ser dividido sin un resto por ningún número excepto 1 y él mismo. En otras palabras, n 
> 1 es un primo si no puede ser divido exactamente por ningún número excepto 1 y n.
Por ejemplo, 5 es un primo, porque no puede ser divido exactamente por 2, 3 y 4.
Escribe el código que muestre números primos en el intervalo de 2 a n.
Para n = 10 el resultado será 2, 3, 5, 7.
PD. El código debería funcionar para cualquier n, no debe estar programado para 
valores fijos.
¿Puedes hacerlo con los 3 tipos de bucle? Demuéstralo.*/
"use strict";

let n = prompt("Introduzca el número hasta que desea calcular los números primos:");
let counterNumber = 2;
let primo;
let cadenaPrimos = "";


//? Números primos de 2 a n calculados sólo con uso de bucle While.
while (counterNumber <= n) {
    let i = counterNumber - 1;
    primo = true;

    while (i > 1) {
        if (counterNumber % i == 0) {
            primo = false;
            break;
        }
        i--;
    }

    if (primo) {
        cadenaPrimos == "" ? cadenaPrimos += counterNumber : cadenaPrimos += ", " + counterNumber;
    }

    counterNumber++;
}

alert(cadenaPrimos);

//? Números primos de 2 a n calculados sólo con uso de bucle Do-While.
counterNumber = 2;
cadenaPrimos = "";

do {
    let i = counterNumber - 1;
    primo = true;


    do {
        if (i > 1 && counterNumber % i == 0) {
            primo = false;
            break;
        }
        i--;
    } while (i > 1);

    if (primo) {
        cadenaPrimos == "" ? cadenaPrimos += counterNumber : cadenaPrimos += ", " + counterNumber;
    }

    counterNumber++;
} while (counterNumber <= n);

alert(cadenaPrimos);

//? Números primos de 2 a n calculados sólo con uso de bucle For.
counterNumber = 2;
cadenaPrimos = "";

for (; counterNumber <= n; counterNumber++) {
    primo = true;

    for (let i = counterNumber - 1; i > 1; i--) {
        if (i > 1 && counterNumber % i == 0) {
            primo = false;
            break;
        }
    }

    if (primo) {
        cadenaPrimos == "" ? cadenaPrimos += counterNumber : cadenaPrimos += ", " + counterNumber;
    }
}

alert(cadenaPrimos);