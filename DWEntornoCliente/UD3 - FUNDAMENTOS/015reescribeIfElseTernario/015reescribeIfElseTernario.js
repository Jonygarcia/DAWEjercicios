/*015reescribeIfElseTernario.js/.html:  Reescriba el if..else utilizando operadores 
ternarios múltiples'?'. Para legibilidad, es recomendad dividirlo en múltiples líneas de 
código.
let message;
if (login == 'Alumno') {
  message = 'Hola estudiante, tiene 10 tareas pendientes';
} else if (login == 'Profesor') {
  message = 'Buenos días, tiene que calificar 1000 actividades';
} else if (login == '') {
  message = 'Sin sesión, estudie algo';
} else {
  message = '';
}*/
"use strict";

let message;

login == 'Alumno' ? message = 'Hola estudiante, tiene 10 tareas pendientes' :
    login == 'Profesor' ? message = 'Buenos días, tiene que calificar 1000 actividades' :
    login == '' ? message = 'Sin sesión, estudie algo' : 
    message = ''; 