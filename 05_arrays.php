<?php

$nombres = ["fabian","juan","ana"];
echo "<pre>";
print_r($nombres);
echo "</pre>";

$materiass = ["calculo","español","mathe"];
echo "<pre>";
print_r($materiass);
echo "</pre>";

//agregar items

$nombres[] = "jerson";
echo "<pre>";
print_r($nombres);
echo "</pre>";

//Accede el total de elementos

echo "el numero total de nombres es: ".count($nombres).'<br>';

//Accede por los indices

echo "el ultimo indice 2 es : ". $nombres[2].'<br>';
echo "el utlimo nombre " .end($nombres).'<br>';

//ordenar alfaveticamente

sort($nombres);
echo"<pre>";
print_r($nombres);
echo"</pre>";

// eñeiminar el ultimo elememto

array_pop($nombres);
echo"<pre>";
print_r($nombres);
echo"</pre>";

//elimina por indice 

unset($nombres[1]);
echo"<pre>";
print_r($nombres);
echo"</pre>";