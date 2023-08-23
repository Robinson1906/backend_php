<?php
require_once 'persona.php';
require_once 'Info.php';

class Empleados extends Persona{ 
    private $numeroEMpleado;
    private $salario;

    public function __construct($numeroEMpleado,$salario,$nombres,$edad,$genero){
        parent::__construct($nombres,$edad,$genero);
        $this ->numeroEMpleado = $numeroEMpleado;
        $this ->salario = $salario;
    }
        


    public function getNumeroEMpleado()
    {
        return $this->numeroEMpleado;
    }


    public function setNumeroEMpleado($numeroEMpleado)
    {
        $this->numeroEMpleado = $numeroEMpleado;

        return $this;
    }

    public function getSañlaro()
    {
        return $this->salario;
    }

    public function setSañlaro($sañlaro)
    {
        $this->salario = $sañlaro;

        return $this;
    }
    public function getInformacion(){
        return "empleado: " .$this->getNombres()."<br>"."numero de empleado: " .$this->getNumeroEMpleado();

    }
    public function getmostrarInformacion(){
        echo $this->getInformacion();
    }
}


?>


