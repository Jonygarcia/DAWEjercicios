<?php
/*009PersonaE.php: Copia las clases del ejercicio anterior y modifícalas.
Añade en Persona un atributo edad
A la hora de saber si un empleado debe pagar impuestos, lo hará siempre y cuando 
tenga más de 21 años y dependa del valor de su sueldo. Modifica todo el código 
necesario para mostrar y/o editar la edad cuando sea necesario.*/

include_once('009PersonaE.php');

class Empleado extends Persona
{

    public static $sueldoTope = 3333;
    private $salario;
    private $telefonos = [];

    public function __construct($nombre, $apellidos, $edad, $salario = 1000)
    {
        $this->salario = $salario;
        Persona::__construct($nombre, $apellidos, $edad);
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    public function getTelefonos()
    {
        return $this->telefonos;
    }

    public function debePagarImpuestos()
    {
        return ($this->edad > 21 && $this->salario > self::$sueldoTope) ? true : false;
    }

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

    public static function toHtml(Persona $p)
    {

        if ($p instanceof Empleado) {
            $cadena = "<p> " . $p->getNombreCompleto() . " </p><ol>";
            $listadoTelefonos = $p->getTelefonos();

            if (count($listadoTelefonos) != 0) {
                for ($i = 0; $i < count($listadoTelefonos); $i++) {
                    $cadena .= "<li>" . $listadoTelefonos[$i] . "</li>";
                }
            }

            return $cadena .= "</ol>";
        }
    }
}
