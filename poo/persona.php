<?php

class Persona{
    private $nombres;
    private $edad;
    private $genero;

    public function __construct($nombres,$edad,$genero){
        $this ->nombres = $nombres;
        $this ->edad = $edad;
        $this ->genero = $genero;
    }

    public function getNombres()
    {
        return $this->nombres;
    }


    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
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


    public function getGenero()
    {
        return $this->genero;
    }


    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }
}