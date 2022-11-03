<?php
/*011PersonaA.php: Copia las clases del ejercicio anterior y modifícalas.
Transforma Persona a una clase abstracta donde su método estático toHtml(Persona 
$p) tenga que ser redefinido en todos sus hijos.*/

abstract class Persona
{
    public function __construct(protected String $nombre, protected String $apellidos, protected int $edad)
    {
    }
    abstract static function toHtml(Persona $p);
}
