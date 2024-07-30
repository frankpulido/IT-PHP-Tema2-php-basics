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
// ojo uso del foreach
*/

$rango;
$numeros = [];
$primos = [];

echo "\n";
echo "Bienvenidos a IT Álgebra.\n";
echo "Hoy usaremos la \"criba de Eratóstenes\" para encontrar los números primos en el intervalo desde el 2 hasta el número que nos indique.\n";;
echo "Debe indicarnos un número entero no menor de 3 (ya conocemos que 2 y 3 son números primos).\n";;
echo "\n";

do {
    $rango = (int) readline ("Indíquenos hasta que número desea que hagamos la búsqueda : ");
    if($rango <= 3) {echo "El número debe ser mayor de 3. Inténtelo de nuevo.\n";}
} while ($rango <= 3);


for ($i = 2; $i <= $rango; $i++) {
    $numeros[] = $i;
}

echo "El intervalo de números naturales del que debemos extraer los primos :\n\n";
print_r($numeros);

echo "\n";
echo "Resultado de la \"Criba de Eratóstenes\" :\n\n";
$primos = (eratostenes($numeros)); // Los paréntesis alrededor de la función ya definen que se recibe un array
print_r($primos);

function eratostenes ($array) {
    do {
        sort($array);
        $primos_purga[] = $array[0];
        $array = (purga($array));
        unset($array[0]);
        sort($array); // unset() elimina el índice 0, sort reindexa todo el array()
    } while (pow($array[0],2) < $array[count($array)-1]); // Study array internal pointer : https://www.w3schools.com/php/func_array_current.asp
    return array_merge($primos_purga, $array);
}

function purga($array) {
    for ($i = 1; $i < count($array); $i++) {
        sort($array);
        if(fmod($array[$i], $array[0]) == 0){unset($array[$i]);} // Mejor trabajar residuo con fmod() que con %, el segundo me da errores
    }
    sort($array);
    return($array);
}

?>