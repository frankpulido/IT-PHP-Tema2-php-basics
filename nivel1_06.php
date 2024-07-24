<?php

/*
Frank Pulido - Tema 2 - Nivel 1 - Ejercicio 5
Preparar VS Code para trabajar con PHP :
https://www.youtube.com/watch?v=WYsgnOal_u0
Material del curso :
https://www.w3schools.com/php/default.asp

ENUNCIADO:
"Charlie me mordió el dedo!" Charlie te morderá el dedo exactamente el 50% del tiempo.
Escribe La función isBitten () que devuelve TRUE con un 50% de probabilidad y FALSE de lo contrario.
*/

$bitten = false;
$random = rand(0, 100);

function isBitten ($a) {
    if ($a <= 50) {
        echo "Hoy Charlie no muerde...";
    } else {
        $bitten = true;
        echo "Charlie me mordió el dedo!!!";
    } 
}

isBitten($random);

// La variable $bitten no es necesaria, pero la he creado de tipo XXX por si tuviera que darle otro uso.

?>