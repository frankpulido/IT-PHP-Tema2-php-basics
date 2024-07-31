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
$opcion = -1;

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

echo "\n";
echo "Ahora que conoce los números primos del rango indicado, le gustaría también conocer\nla descomposición factorial de los números NO primos del conjunto?...\n";
do {
    $opcion = (int) readline("[1] : SI , [0] : NO ? : ");
    if ($opcion != 1 && $opcion != 0) {echo "Opción no válida\n";}
} while ($opcion != 1 && $opcion != 0);

if ($opcion == 1) {
    $descomposicion_no_primos_asociativo = descomposicion_factorial ($numeros, $primos);
    print_r($descomposicion_no_primos_asociativo);
}
echo "\nHasta pronto, esperamos que le haya gustado este programa... Volveremos con más y mejor.";


// A continuación las funciones usadas

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

// [EXTRA MILE] : DESCOMPOSICIÓN FACTORIAL DE LOS NO PRIMOS - Aprovecha la ejecución de las funciones anteriores y usa $primos
function descomposicion_factorial ($numeros, $primos) {
    $no_primos = []; // contendrá las $keys del resultado
    $factores = []; // contendrá los factores de cada elemento de $no_primos
    $factores_asociativo = []; // combina $primos como claves de valores de $factores
    $descomposicion_no_primos_asociativo = []; // resultado final, combinacion de keys $no_primos con $factores_asociativo


    $no_primos = array_diff($numeros, $primos); // sustraemos los primos del conjunto de números escogidos por el usuario
    sort($no_primos); // reindexamos, aunque no es realmente necesario para hacer el array_combine de keys($no_primos) y sus respectivos $factores

    for ($i = 0; $i < count($no_primos); $i++) {
        $numero = 0;
        $numero = $no_primos[$i];
        unset($factores);
        for ($j = 0; $j < count($primos); $j++) {
            $primo = 0;
            $primo = $primos[$j];
            $pow_primo = $primo; // ahora está elevado a "1"
            $factor = 0;
            $testigo = 0;
            do {
                if (fmod($numero, $pow_primo) == 0) {
                    $factor++; // Si se divide por el primo tendremos un factor de $primo^1 ($factor++ = 1) en el primer ciclo, $primo^2 en el segundo, etc
                    $testigo = 1;
                    $pow_primo = pow($primo, ($factor + 1)); // 
                } else {
                    $testigo = 0;
                }
            } while ($testigo == 1 && $pow_primo <= $numero); // Sin la segunda condición el bucle era infinito !!!
            $factores[] = $factor;
        }
        $factores_asociativo[] = array_combine($primos, $factores);
    }
    $descomposicion_no_primos_asociativo = array_combine($no_primos, $factores_asociativo);
    return $descomposicion_no_primos_asociativo;
}

?>