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
include_once('014InterfazI.php');

class Empleado extends Trabajador implements JSerializable
{
    private $horasTrabajadas;
    private $precioPorHora;

    public function calcularSueldo()
    {
        return $this->horasTrabajadas * $this->precioPorHora;
    }

    public function getPrecioPorHora()
    {
        return $this->precioPorHora;
    }

    public function setPrecioPorHora($precioPorHora)
    {
        $this->precioPorHora = $precioPorHora;

        return $this;
    }

    public function getHorasTrabajadas()
    {
        return $this->horasTrabajadas;
    }

    public function setHorasTrabajadas($horasTrabajadas)
    {
        $this->horasTrabajadas = $horasTrabajadas;

        return $this;
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