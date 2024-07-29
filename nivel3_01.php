<?php

/*
Frank Pulido - Tema 2 [PHP BÁSICO] - Nivel 3 - Ejercicio 1
Material del curso :
https://www.w3schools.com/php/default.asp

ENUNCIADO:
La criba de Eratóstenes es un algoritmo pensado para encontrar números primos dentro de un intervalo dado. Basándote en la información del enlace adjunto, implementa la criba de Eratóstenes dentro de una función, de tal forma que podamos invocar la función para un número concreto.
https://es.wikipedia.org/wiki/Criba_de_Erat%C3%B3stenes

ESTUDIAR :
// repasar scope de las variables : globales, etc
// ojo "passing arguments by reference" : https://www.w3schools.com/php/php_functions.asp
// ojo definición de valor por defecto en las funciones : https://www.w3schools.com/php/php_functions.asp
// ojo uso del for each
// Planteamiento de nivel2_03 con arrays :
*/

echo "Bienvenidos a IT Álgebra" . "\n";
echo "Hoy usaremos la \"criba de Eratóstenes\" para encontrar los números primos en el intervalo desde el 1 hasta el número que nos indique" . "\n";;
echo "Indíquemos un número entero no menor de 3 (ya conocemos que 1, 2 y 3 son primos) : " . "\n";;

do {
    $rango = (int) readline ("Indíquenos hasta que número desea que hagamos la búsqueda : ");
    if($rango < 3) {echo "El número debe ser mayor de 3. Inténtelo de nuevo.". "\n";}
} while ($rango < 3);

$primos = [1,2,3];

while ($i < $rango + 1) {
    $primos = [i];
    $i++;
}


$numeros = [];
$purga1 = [];
$purga2 = [];

function purga1($par) {
    array_push($purga1, $par);
}

function purga2($imparNoPrimo) {
    echo "";
}

foreach ($numeros as $par) {
    if ($par % 2 == 0) {
        purga1($par);
        unset($numeros[$par]);
    }
}

?>