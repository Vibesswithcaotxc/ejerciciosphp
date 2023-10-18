<?php
  class Persona{
    private $nombre;
    private $edad;
    static $contadorPersonas = 0;


    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        self::$contadorPersonas++;

    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nuevo_nombre){
        $this->nombre = $nuevo_nombre;   
    }

    public function getEdad(){
        return $this->edad;
    }
    public function setEdad($nueva_edad){
        $this->edad = $nueva_edad;   
    }

    function __toString()
    {
        return "Persona con nombre: " . $this->getNombre() .
        ", edad: " . $this->getEdad();
    }




  }