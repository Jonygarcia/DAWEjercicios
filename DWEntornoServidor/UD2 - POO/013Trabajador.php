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

include_once('013Persona.php');

abstract class Trabajador extends Persona
{
    private $telefonos = [];

    abstract function cacularSueldo();
    public function debePagarImpuestos()
    {
    }

    public static function toHtml(Persona $p){
        echo "<p>".$p->getNombreCompleto()."</p>
                <p>".$p->getEdad()."</p>";
    }
}
