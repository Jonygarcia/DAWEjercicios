/*016logicos.js/.html: ¿Cuál será el resultado de las siguientes operaciones?
alert( null || 2 || undefined );
alert( alert(1) || 2 || alert(3) );
alert( 1 && null && 2 );
alert( alert(1) && alert(2) );
alert( null || 2 && 3 || 4 );*/
"use strict";

alert(null || 2 || undefined);
// 2 -> Es el primer valor verdadero y el operador OR muestra el primer valor verdadero.

alert(alert(1) || 2 || alert(3));
// 2 -> Debido a que un alert dentro de otro alert sólo lo muestra pero no realiza comparación alguna.

alert(1 && null && 2);
// null -> Ya que el operador AND devuelve el valor falso que encuente, en este caso encuentra null que es el que retorna.

alert(alert(1) && alert(2));
// undefined -> Ya que realmente no está comparando nada debido a que el alert(1) muestra su valor pero no lo compara.

alert(null || (2 && 3) || 4);
// 3 -> Debido a que compara con AND 2 y 3, al ser true el 2 devuelve el segundo operando que sería el 3, y de la secuencia OR es el primero verdadero.
