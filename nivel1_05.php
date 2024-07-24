<?php

/*
Frank Pulido - Tema 2 - Nivel 1 - Ejercicio 5
Preparar VS Code para trabajar con PHP :
https://www.youtube.com/watch?v=WYsgnOal_u0
Material del curso :
https://www.w3schools.com/php/default.asp

ENUNCIADO :
Escribir una función para verificar el grado de un/a estudiante de acuerdo con la nota.
Condiciones:
    Si la nota es 60% o más, el grado debería ser Primera División.
    Si la nota está entre el 45% y el 59%, el grado debería ser Segunda División.
    Si la nota está entre 33% a 44%, el grado debería ser Tercera División.
    Si la nota es menor a 33%, el estudiante reprobará.
*/

function grado ($x) {
    echo "La nota $x corresponde a un grado de ";
    if ($x < .33) {echo "Reprobado.";}
    elseif ($x <= .44) {echo "TERCERA División.";}
    elseif ($x <= .59) {echo "SEGUNDA División.";}
    else {echo "PRIMERA División.";}
}

$nota = -1;
do {
    echo "Si quiere verificar el grado que corresponde a su NOTA indíquela a continuación (número entre 0 y 1)";
    $nota = (float)readline();
    grado($nota);
    if($nota < 0 || $nota > 1) {echo "Ha indicado un valor fuera de rango. Reintroduzca el valor";}
} while ($nota < 0 || $nota > 1);

?>