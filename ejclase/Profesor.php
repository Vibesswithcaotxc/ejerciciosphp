<?php
class Profesor extends Persona 
{
    private $codProfesor;

    public function __construct($nombre, $edad, $codProfesor){

        parent::__construct($nombre,$edad);
        $this->codProfesor = $codProfesor;

    }

    public function getCodProfesor(){
        return $this->codProfesor;
    }
    public function setCOdProfesor($nuevo_cod){
        $this->codProfesor = $nuevo_cod;   
    }

    function __toString()
    {
        return "Nombre: ".parent::getNombre().", Edad: ".parent::getEdad()." Codigo: " . $this->getCodProfesor();
    }

    
}
