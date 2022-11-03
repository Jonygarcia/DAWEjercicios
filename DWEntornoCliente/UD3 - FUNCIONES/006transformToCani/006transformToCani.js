/*006transformToCani.js/.html: Crear una función que reciba una cadena y la devuelva 
transformada en Cani. Por ejemplo, si le pasamos a la función la cadena "una cadena 
cani es como ésta" obtendremos "UnA KaDeNa kAnI Es kOmO EsTaHHH". Para ello, hay 
que alternar el uso de MAYÚSCULAS y minúsculas, sustituir la letra C por la K y añadir 
tres letras H al final. */
"use strict";

let userText = prompt("Introduzca la frase para pasarla al modo cani:");

document.write(toCani(userText));

function toCani(userText) {
    let nuevaCadena = "";

    for (let i = 0; i < userText.length; i++) {
        if (userText[i] == " ") {
            nuevaCadena += i == userText.length - 1 ? "HHH" : " ";
        } else {
            if (i % 2 == 0) {
                if (userText[i] == "c" || userText[i] == "C") {
                    nuevaCadena += "K";
                } else {
                    nuevaCadena += userText[i].toUpperCase();
                }
            } else {
                nuevaCadena +=
                    userText[i] == "c" || userText[i] == "C"
                        ? "k"
                        : userText[i].toLowerCase();
            }

            if (i == userText.length - 1) nuevaCadena += "HHH";
        }
    }

    return nuevaCadena;
}
