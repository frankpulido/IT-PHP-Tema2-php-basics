<?php
/*
Frank Pulido - Tema 2 - Nivel 1 - Ejercicio 4
Preparar VS Code para trabajar con PHP :
https://www.youtube.com/watch?v=WYsgnOal_u0
Material del curso :
https://www.w3schools.com/php/default.asp

ENUNCIADO :
Haz un programa que implemente una función en la que se cuente hasta un número determinado. Si no se incluye un número determinado, el número deberá tener un valor por defecto igual a 10. Además, esta función debe tener un segundo parámetro que indique de cuánto a cuánto se cuenta(De 1 en 1, de 2 en 2…). La cuenta debe mostrarse por pantalla paso a paso.
*/

function contar1 ($x) {
    echo "Contaremos hasta $x de 1 en 1 :" . PHP_EOL;
    $i = 1;
    while ($i <= $x) {
        echo $i . "\n";
        $i++;
    }
}
function contar2 ($x) {
    if ($x % 2 == 0) {
        echo "El número $x es PAR, contaremos de 2 en 2 hasta  llegar a $x." . PHP_EOL;
    } else {
        echo "El número $x es IMPAR, contaremos de 2 en 2 hasta el número anterior a $x." . PHP_EOL;
        if ($x ==1) {echo "(ya sabes que no podemos contar de 2 en 2 hasta el 1)";};
    }
    $i = 0;
    while ($i <= $x) {
        echo $i . "\n";
        $i = $i + 2;
    } 
}

echo "Vamos a aprender a contar hasta un número. Indica hasta que número quieres que contemos :" . "\n";
do {
    $a = (int)readline('Indica un número entero mayor o igual a 1 : '); // El comando readline() permite introducir valores por terminal
    PHP_EOL;
    if ($a < 1) {echo "Debes indicar un entero positivo mayor o igual a 1" . PHP_EOL;}
} while ($a < 1);

echo "Vamos a contar hasta el $a. Cómo lo hacemos?..." . "\n";

$opcion = 0;
do {
    echo "Indica \"1\" si quieres contar de 1 en 1 y \"2\" si quieres contar de 2 en 2." . "\n";
    $opcion = (int)readline();
    PHP_EOL;
    // $opcion = 2; /// usé esta variable de prueba porque no me funcionaba readline()
    echo "Muy bien, contaremos de $opcion en $opcion :" . "\n";
    switch ($opcion) {
        case (1) :
            contar1($a);
            break;
        case(2) :
            contar2($a);
            break;
        default :
            echo "Debe indicar \"1\" o \"2\".";
    }
} while ($opcion != 1 && $opcion != 2)


?>