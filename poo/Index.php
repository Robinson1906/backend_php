<?php
require_once 'persona.php';

echo"<h1>programacion orientada a objetos </h1>";


$persona = new Persona("ana",25,"femenino");

//acceder a metodos de esa persona 

echo "nombre :".$persona->getNombres()." edad: ".$persona ->getEdad().", genero : ".$persona ->getGenero();