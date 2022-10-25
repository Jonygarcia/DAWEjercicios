<?php
/*006EmpleadoStatic.php: Copia la clase del ejercicio anterior y modifícala. Completa el 
siguiente método con una cadena HTML que muestre los datos de un empleado 
dentro de un párrafo y todos los teléfonos mediante una lista ordenada (para ello, 
deberás crear un getter para los teléfonos):
public static function toHtml(Empleado $emp): string*/

class Empleado
{

    private static $sueldoTope = 3333;
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

    public static function toHtml(Empleado $emp)
    {
        $cadena = "<p> " . $emp->getNombreCompleto() . " </p><ol>";
        $listadoTelefonos = $emp->getTelefonos();

        if (count($listadoTelefonos) != 0) {
            for ($i = 0; $i < count($listadoTelefonos); $i++) {
                $cadena .= "<li>" . $listadoTelefonos[$i] . "</li>";
            }
        }

        return $cadena .= "</ol>";
    }
}
