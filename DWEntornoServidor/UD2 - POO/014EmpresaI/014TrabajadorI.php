<?php 
/* 014EmpresaI.php: Copia las clases del ejercicio anterior y modifícalas.
Crea un interfaz JSerializable, de manera que ofrezca los métodos:
toJSON(): string → utiliza la función json_encode(mixed). Ten en cuenta que como 
tenemos las propiedades de los objetos privados, debes recorrer las propiedades y 
colocarlas en un mapa.
toSerialize(): string → utiliza la función serialize(mixed)
Modifica todas las clases que no son abstractas para que implementen el interfaz 
creado. */

include_once('014PersonaI.php');

abstract class Trabajador extends Persona
{
    private $telefonos = [];

    abstract function calcularSueldo();
    public function debePagarImpuestos()
    {
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
        echo "<p>" . $p->getNombre() . " " . $p->getApellidos() . "</p>";
    }
}
