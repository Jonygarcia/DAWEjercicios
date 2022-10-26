<?php
/*012Trabajador.php: Copia las clases del ejercicio anterior y modifícalas.
Cambia la estructura de clases conforme al gráfico respetando todos los métodos que 
ya están hechos. Trabajador es una clase abstracta que ahora almacena los teléfonos y 
donde calcularSueldo es un método abstracto de manera que:
El sueldo de un Empleado se calcula a partir de las horas trabajadas y lo que cobra por 
hora. Para los Gerentes, su sueldo se incrementa porcentualmente en base a su edad: 
salario + salario*edad/100*/

include_once('012Persona.php');

abstract class Trabajador extends Persona
{
    private $telefonos = [];

    private const SUELDO_TOPE = 3333;

    public function anyadirTelefono(int $telefono)
    {
        array_push($this->telefonos, $telefono);
    }

    public function listarTelefonos()
    {
        $cadenatlf = "";
        foreach ($this->telefonos as $id => $numero) {
            $cadenatlf .= ($id == 0) ? $numero : ", " . $numero;
        }

        return $cadenatlf;
    }

    public function vaciarTelefonos() 
    {
        while (count($this->telefonos) != 0) {
            array_shift($this->telefonos);
        }
    }

    abstract function calcularSueldo();

    public function debePagarImpuestos()
    {
    }
}
