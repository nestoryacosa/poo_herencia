<?php
    // Importamos de la carpeta clases las clases a usar
    require_once("clases/Persona.php");
    require_once("clases/Profesor.php");
    require_once("clases/Estudiante.php");

    echo "<h1>Datos personales</h1>";
    // Creamos un objeto de la clase Estudiante
    // usando el constructor de la clase
    $estudiante1 = new Estudiante("5.678.098-3","Rodrigo","Paz");
    // usando el método seteamos el bachillerato que cursa
    $estudiante1->setBachillerato("Informática");
    // usando otro método creamos un string con sus datos
    echo $estudiante1->datosPersonales();
    // obtenemos métodos para renderizar otra propiedad
    echo $estudiante1->getBachillerato()."<br><hr>";

    // Creamos un objeto de la clase profesor 
    // y asignamos una aasignatura a este
    $profe1 = new Profesor("4.090.234-1","Ramón","Solano");
    $profe1->setAsignatura("Sistemas Operativos");
    // desplegamos esta información
    echo $profe1->datosPersonales();
    echo "Es profesor de ". $profe1->getAsignatura();


?>