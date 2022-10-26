<?php 
use function MongoDB\BSON\toJSON;
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


class Gerente extends Trabajador implements JSerializable{
    private $salario;

    public function calcularSueldo()
    {
        return $this->salario = ($this->salario * ($this->edad)) / 100;
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