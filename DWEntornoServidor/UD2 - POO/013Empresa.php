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
include_once('013Persona.php');

class Empresa
{
    private $nombre;
    private $direccion;
    private $trabajadores = [$this->Empleado => [], $this->Gerente => []];   

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
        foreach ($this->trabajadores as $tipo => $nombre){
            foreach ($nombre as $tipoEmpleados){
                Trabajador::toHtml($tipoEmpleados);
            }
        }  
    }

    public function getCosteNominas()
    {
        $totalNominas = 0;
        foreach ($this->trabajadores as $cargo => $trabajador) {
            $totalNominas += $trabajador->calcularSueldo();
        }
    }
}
