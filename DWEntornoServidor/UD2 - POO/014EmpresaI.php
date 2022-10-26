<?php 
/* 014EmpresaI.php: Copia las clases del ejercicio anterior y modifícalas.
Crea un interfaz JSerializable, de manera que ofrezca los métodos:
toJSON(): string → utiliza la función json_encode(mixed). Ten en cuenta que como 
tenemos las propiedades de los objetos privados, debes recorrer las propiedades y 
colocarlas en un mapa.
toSerialize(): string → utiliza la función serialize(mixed)
Modifica todas las clases que no son abstractas para que implementen el interfaz 
creado. */

include_once('014TrabajadorI.php');
include_once('014PersonaI.php');
include_once('014GerenteI.php');
include_once('014EmpleadoI.php');
include_once('014InterfazI.php');


class Empresa implements JSerializable
{
    private $nombre;
    private $direccion;
    private $trabajadores = [];

    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function anyadirTrabajador(Trabajador $t)
    {
        array_push($this->trabajadores, $t);
    }

    public function listarTrabajadoresHtml()
    {
        foreach ($this->trabajadores as $trabajador) {
            Trabajador::toHtml($trabajador);
        }
    }

    public function getCosteNominas()
    {
        $totalNominas = 0;
        foreach ($this->trabajadores as $trabajador) {
            $nomina = $trabajador->calcularSueldo();
            $totalNominas += $nomina;
        }
        return $totalNominas;
    }

    public function toJSON(): string
    {
        $mapa = get_object_vars($this);

        return json_encode($mapa);
    }

    public function toSerialize(): string
    {
        return serialize($this);
    }
}
