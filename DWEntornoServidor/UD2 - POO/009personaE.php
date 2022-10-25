<?php
/*009PersonaE.php: Copia las clases del ejercicio anterior y modifícalas.
 Añade en Persona un atributo edad
 A la hora de saber si un empleado debe pagar impuestos, lo hará siempre y cuando 
 tenga más de 21 años y dependa del valor de su sueldo. Modifica todo el código 
 necesario para mostrar y/o editar la edad cuando sea necesario.*/

class Persona
{

    public function __construct(protected string $nombre, protected string $apellidos, protected int $edad)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    public function getNombreCompleto()
    {
        return $this->nombre . " " . $this->apellidos;
    }

    public static function toHtml(Persona $p)
    {
        $cadena = "<p> " . $p->getNombreCompleto() . " </p>";

        return $cadena;
    }
}
