<?php
/*010PersonaS.php: Copia las clases del ejercicio anterior y modifícalas.
Añade nuevos métodos que hagan una representación de todas las propiedades de las 
clases Persona y Empleado, de forma similar a los realizados en HTML, pero sin que 
sean estáticos, de manera que obtenga los datos mediante $this.
function public __toString(): string*/

class Persona
{

    public function __construct(protected String $nombre, protected String $apellidos, protected int $edad)
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

    public function __toString()
    {
        return "Nombre: " . $this->nombre . "<br>
                Apellidos: " . $this->apellidos . "<br>
                Edad: " . $this->edad . "<br>";
    }
}
