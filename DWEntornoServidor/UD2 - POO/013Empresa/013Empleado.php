<?php
/*013Empresa.php: Utilizando las clases de los ejercicios anteriores:
Crea una clase Empresa que además del nombre y la dirección, contenga una 
propiedad con un array de Trabajadores, ya sean Empleados o Gerentes.
Añade getters/setters para el nombre y dirección.
Añade métodos para añadir y listar los trabajadores.
public function anyadirTrabajador(Trabajador $t)
public function listarTrabajadoresHtml() : string -> utiliza Trabajador::toHtml(Persona 
$p)
Añade un método para obtener el coste total en nóminas.
public function getCosteNominas(): float -> recorre los trabajadores e invoca al 
método calcularSueldo().*/

include_once('013Trabajador.php');

class Empleado extends Trabajador
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
}
