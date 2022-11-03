<?php
/*004EmpleadoConstante.php: Copia la clase del ejercicio anterior y modifícala. Añade 
una constante SUELDO_TOPE con el valor del sueldo que debe pagar impuestos, y 
modifica el código para utilizar la constante.*/

class Empleado
{

    const SUELDO_TOPE = 3333;
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
        return ($this->sueldo > Empleado::SUELDO_TOPE) ? true : false;
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
