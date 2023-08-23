<?php

$calificaciones = [
    "ana" => [
        "matemanticas" =>2,
        "historis"=>4,
        "ingles"=>1,
        "español"=>5
    ],
    "juan" =>[
        "matemanticas" =>2.1,
        "historis"=>4.2,
        "ingles"=>1.8
    ],
    "pedro" =>[
        "matemanticas" =>2.3,
        "historis"=>1,
        "ingles"=>5
    ],
];
//count

echo"total de califica: ".count($calificaciones,COUNT_RECURSIVE);

$calificaciones["ana"]["matematicas"]=5;
echo "<pre>";
print_r($calificaciones);
echo "</pre>";
