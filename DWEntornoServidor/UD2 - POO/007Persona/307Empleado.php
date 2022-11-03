<?php
/*007Persona.php: Copia la clase del ejercicio anterior en 307Empleado.php y 
modifícala.Crea una clase Persona que sea padre de Empleado, de manera que 
Persona contenga el nombre y los apellidos, y en Empleado quede el salario y los 
teléfonos.*/

include_once('007Persona.php');

class Empleado extends Persona
{

    private static $sueldoTope = 3333;
    private $telefonos = [];

    public function __construct($nombre, $apellidos, private float $sueldo = 1000)
    {
        Persona::__construct($nombre, $apellidos);
    }

    public function getSueldo()
    {
        return $this->sueldo;
    }

    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;

        return $this;
    }

    public function getNombreCompleto()
    {
        return $this->nombre . " " . $this->apellidos;
    }

    public static function getSueldoTope()
    {
        return self::$sueldoTope;
    }

    public static function setSueldoTope($sueldoTope)
    {
        self::$sueldoTope = $sueldoTope;
    }

    public function getTelefonos()
    {
        return $this->telefonos;
    }

    public function debePagarImpuestos()
    {
        return ($this->sueldo > self::$sueldoTope) ? true : false;
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

    // Comento la función toHtml ya que en el ejercicio 008 me estaba creando conflicto.
    /*
    public static function toHtml(Empleado $emp){
        $cadena = "<p> ". $emp->getNombreCompleto()." </p><ol>";
        $listadoTelefonos = $emp->getTelefonos();

        if(count($listadoTelefonos) != 0){
            for($i = 0; $i < count($listadoTelefonos); $i++){
                $cadena .= "<li>".$listadoTelefonos[$i]."</li>";
            }
        }

        return $cadena .= "</ol>";
    }
    */
}
