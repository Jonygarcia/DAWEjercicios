<?php
/* 003EmpleadoConstructor.php: Copia la clase del ejercicio anterior y modifícala. 
Elimina los setters de nombre y apellidos, de manera que dichos datos se asignan 
mediante el constructor (utiliza la sintaxis de PHP8). Si el constructor recibe un tercer 
parámetro, será el sueldo del Empleado. Si no, se le asignará 1000€ como sueldo 
inicial. */

class Empleado
{
    private $telefonos = [];

    public function __construct(private $nombre, private $apellidos, private $sueldo = 1000)
    {
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellidos()
    {
        return $this->apellidos;
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

    public function debePagarImpuestos()
    {
        return ($this->sueldo > 3333) ? true : false;
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
}
