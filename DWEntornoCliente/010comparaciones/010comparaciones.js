/* 010comparaciones.js/.html: ¿Cuál será el resultado de las siguientes expresiones? 
5 > 4
"apple" > "microsoft"
"2" > "12"
undefined == null
undefined === null
null == "\n0\n"
null === +"\n0\n" */
"use strict";

alert(5 > 4); // true -> 5 es mayor que 4
alert("apple" > "microsoft"); // false -> el valor del primer caracter de apple es menor que el de microsoft
alert("2" > "12"); // true -> el valor del primer y único caracter de 2 es mayor que el primer caracter de 12
alert(undefined == null); // true -> undefined se convierte en NaN y null en 0, son iguales a la hora de comparar, no tienen valor
alert(undefined === null); // false -> siguiendo la explicación del anterior, son iguales en comparación pero no idénticos
alert(null == "\n0\n"); // El string con saltos de línea tiene el valor numérico 0, pero null sólo toma el valor numérico 0 en caso de comparar con simbolos <>
alert(null === +"\n0\n"); // Null no es exactamente igual que el valor numérico 0, además de que null no toma el valor numérico 0 ya que no lo está comparando con 0