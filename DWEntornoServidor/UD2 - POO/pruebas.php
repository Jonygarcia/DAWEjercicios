<?php 
// Prueba 001Empleado
/*
include_once ('001Empleado.php');

$persona = new Empleado();
$persona->setNombre("Pepe");
$persona->setApellidos("Martínez Pérez");
$persona->setSueldo(4200);

echo $persona->getNombreCompleto()."<br>";
echo ($persona->debePagarImpuestos()) ? "Debe pagar impuestos" : "No debe pagar impuestos";
*/

// Prueba 002EmpleadoTelefonos
/*
include_once ('002EmpleadoTelefonos.php');

$persona = new Empleado();
$persona->anyadirTelefono("665105512");
$persona->anyadirTelefono("605493845");

echo $persona->listarTelefonos();

$persona->vaciarTelefonos();

echo $persona->listarTelefonos();
*/

// Prueba 003EmpleadoConstructor
/*
include_once ('003EmpleadoConstructor.php');

$persona1 = new Empleado("Pepe", "Martínez Pérez");
$persona2 = new Empleado("Juan", "García López", 2500);

echo $persona1->getNombreCompleto() ." tiene un sueldo de ". $persona1->getSueldo() . "€<br>";
echo $persona2->getNombreCompleto() ." tiene un sueldo de ". $persona2->getSueldo() . "€<br>";
*/

// Prueba 004EmpleadoConstante
/*
include_once ('004EmpleadoConstante.php');

$persona1 = new Empleado("Pepe", "Martínez Pérez");
$persona2 = new Empleado("Juan", "García López", 3500);

echo ($persona1->debePagarImpuestos()) ? "Debe pagar impuestos" : "No debe pagar impuestos" . "<br>";
echo ($persona2->debePagarImpuestos()) ? "Debe pagar impuestos" : "No debe pagar impuestos";
*/

// Prueba 005EmpleadoSueldo
/*
include_once ('005EmpleadoSueldo.php');

echo Empleado::getSueldoTope() . "<br>";

Empleado::setSueldoTope(4000);

echo Empleado::getSueldoTope();
*/

// Prueba 006EmpleadoStatic
/*
include_once ('006EmpleadoStatic.php');

$persona1 = new Empleado("Jaime", "Rodríguez Marín");
$persona1->anyadirTelefono("665105512");
$persona1->anyadirTelefono("605493845");
$persona1->anyadirTelefono("606757896");

$persona2 = new Empleado("María", "Gutiérrez Acevedo");

echo Empleado::toHtml($persona1);
echo Empleado::toHtml($persona2);
*/

// Prueba 007Persona y 307Empleado
/*
include_once ('307Empleado.php');

$persona = new Empleado("María", "Gutiérrez Acevedo");

echo $persona->getNombreCompleto();
*/

// Prueba 008PersonaH y 308EmpleadoH
/*
include_once ('308EmpleadoH.php');

$persona1 = new Empleado("Jaime", "Rodríguez Marín");
$persona1->anyadirTelefono("665105512");
$persona1->anyadirTelefono("605493845");
$persona1->anyadirTelefono("606757896");

$persona2 = new Empleado("María", "Gutiérrez Acevedo");

echo Empleado::toHtml($persona1);
echo Empleado::toHtml($persona2);
*/

// Prueba 009PersonaE y 309EmpleadoE
/*
include_once ('309EmpleadoE.php');

$persona1 = new Empleado("Jaime", "Rodríguez Marín", 20, 4000);

echo $persona1->debePagarImpuestos() ? "Debe pagar impuestos" : "No está obligado a pagar impuestos";

$persona1->setEdad(22);

echo $persona1->debePagarImpuestos() ? "Debe pagar impuestos" : "No está obligado a pagar impuestos";
*/

// Prueba 010PersonaS y 310EmpleadoS
/*
include_once ('310EmpleadoS.php');
include_once ('010PersonaS.php');


$persona1 = new Persona("Miriam", "Vega Ramos", 35);
$empleado1 = new Empleado("Jaime", "Rodríguez Marín", 20, 4000);
$empleado1->anyadirTelefono(620523569);
$empleado1->anyadirTelefono(647859621);

echo $persona1->__toString() . "<br>";

echo $empleado1->__toString();
*/

// 013 Pruebas
/*
include_once ('013Empleado.php');
include_once ('013Gerente.php');
include_once ('013Empresa.php');

$gerente1 = new Gerente("Paco", "Nuñez Mora");
$empleado1 = new Empleado("Carlos", "Pérez Junco");

$empresa = new Empresa();
$empresa->setDireccion("LamismadeIlerna");
$empresa->setNombre("VayaRuina");

$empresa->anyadirTrabajador($gerente1);

$empresa->anyadirTrabajador($empleado1);

$empresa->listarTrabajadoresHtml();
*/
