<?php 
/* 014EmpresaI.php: Copia las clases del ejercicio anterior y modifícalas.
Crea un interfaz JSerializable, de manera que ofrezca los métodos:
toJSON(): string → utiliza la función json_encode(mixed). Ten en cuenta que como 
tenemos las propiedades de los objetos privados, debes recorrer las propiedades y 
colocarlas en un mapa.
toSerialize(): string → utiliza la función serialize(mixed)
Modifica todas las clases que no son abstractas para que implementen el interfaz 
creado. */
interface JSerializable{
    public function toJSON() : string;

    public function toSerialize() : string;
}