<?php

$edades = [
    "ana" =>10,
    "juan"=>32,
    "maria"=>25,
    "carlos"=>30,
    "luis"=>22
];

$edades1 = array(
    "ana" =>10,
    "juan"=>32,
    "maria"=>25,
    "carlos"=>30,
    "luis"=>22
);
echo"<pre>";
print_r($edades1);
echo"</pre>";

//Agregar items

$edades1["laura"] = 23;
echo"<pre>";
print_r($edades1);
echo"</pre>";

//count
echo"cantidad de elementos: ".count($edades1).'<br>';

//end
echo"el ultimo elemnto es : ".end($edades1);

//array pop
array_pop($edades1);
echo"<pre>";
print_r($edades1);
echo"</pre>";

//eliminar un elemnto 

unset($edades1["ana"]);
echo"<pre>";
print_r($edades1);
echo"</pre>";
