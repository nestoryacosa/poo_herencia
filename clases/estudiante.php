<?php
    // importamos la superclase Persona
    require_once("Persona.php");
    // creamos un clase hija de Persona
    class Estudiante extends Persona{
        protected $bachillerato;

        
        // Observa como extendemos el método constructor
        // de la superclase a su subclase con parent::
        function __construct($cedula,$nombre,$apellido){
            parent::__construct($cedula,$nombre,$apellido);    
        }
        // un set y un get para la propiedad de la subclase
        function setBachillerato($bachillerato){
            $this->bachillerato = $bachillerato;
        }

        function getBachillerato(){
            return "Cursa ". $this->bachillerato;
        }

        
}