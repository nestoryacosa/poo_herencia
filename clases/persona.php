<?php
// Creamos la superclase Persona
class Persona{
    private $nombre;
    private $apellido;
    private $cedula;

    // Creamos un método constructor para la clase
    function __construct($cedula,$nombre,$apellido){
        $this->cedula = $cedula;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }
    // usamos métodos mágicos,
    // para todas las propiedades
    function __get($prop)
    {
        return $this->$prop;
    }

    function __set($prop,$valor)
    {
        $this->$prop = $valor;
    }
    // creamos un método para exhibir datos de
    // cada objeto que creemos con new
    function datosPersonales()
    {
        $data = "
            <h2>Datos Personales</h2>
            Cédula: {$this->cedula}<br>
            Nombre: {$this->nombre} {$this->apellido}<br>   
            ";

        return $data;         
    }
}