<?php
    // importamos la superclase Persona
    require_once("Persona.php");
    // creamos la subclase
    class Profesor extends Persona{
        // Propiedad de la subclase
        protected $asignatura;
        // Métodos
        function __construct($cedula,$nombre,$apellido){
            parent::__construct($cedula,$nombre,$apellido);    
        }

        function setAsignatura($asignatura){
            $this->asignatura = $asignatura;
        }

        function getAsignatura(){
            return $this->asignatura;
        }
}