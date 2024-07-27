<?php
/*
Frank Pulido - Tema 2 - Nivel 1 - Ejercicio 3
Preparar VS Code para trabajar con PHP :
https://www.youtube.com/watch?v=WYsgnOal_u0
Material del curso :
https://www.w3schools.com/php/default.asp

ENUNCIADO :
a) Declara dos variables X e Y de tipo int, dos variables N y M de tipo double y asigna a cada una un valor.
A continuación, muestra por pantalla para X e Y:
El valor de cada variable.
La suma.
La diferencia.
El producto.
El módulo (residuo de la división).

Para N y M realizar lo mismo.

Para todas las variables (X, Y, N, M):
El doble de cada variable.
La suma de todas las variables.
El producto de todas las variables.

b) Crea una función Calculadora que entre dos números por parámetro, y en un tercer parámetro te permita realizar la suma, la resta, la multiplicación o la división de los dos números.

*/

$x = 5;
$y = 2;
$n = 3.14;
$m = 6.28;

function suma($a,$b) {
    echo $a + $b;
}
function resta($a,$b) {
    echo $a - $b;
}
function producto($a,$b) {
    echo $a * $b;
}
function division($a,$b) {
    echo $a / $b;
}
function residuo($a,$b) {
    echo ($a % $b); // he hecho un casting porque tenía problemas con la coma flotante y no funcionó... REVISAR
}

function todas($a,$b) {
    echo "Tenemos 2 variables con las que vamos a operar. X = " . $a . " y Y = " . $b . "." . PHP_EOL;
    echo "Su suma : "; echo suma($a,$b) . PHP_EOL;
    echo "Su diferencia : "; echo resta($a,$b) . PHP_EOL;
    echo "Su producto : "; echo producto($a,$b) . PHP_EOL;
    echo "Su división : "; echo division($a,$b) . PHP_EOL;
    // echo "Su residuo : "; echo residuo($a,$b) . PHP_EOL; La he sacado fuera por problemas con variables tipo FLOAT
}

echo "\n";
echo "Bienvenidos a IT Aritmética.\n";
todas($x,$y);
echo "Su residuo : "; echo residuo($x,$y) . PHP_EOL;
PHP_EOL;
echo "\n";
echo "Ahora usemos variables de coma flotante : " . "\n";
todas($n,$m);

PHP_EOL;
echo "\n";

// Calculadora
echo "Ahora usarás nuestra calculadora.\n";

do {
    $opcion = -1;

    while ($opcion < 0 || $opcion > 5) {
        echo "\n";
        echo "Funciones de la calculadora :" . PHP_EOL; // PHP_EOL funciona igual que "\n"
        echo "1. Suma ". "\n" . "2. Resta.". "\n" . "3. Multiplicación.". "\n" . "4. División.". "\n" . "5. Residuo." . "\n" . "0. Salir de la calculadora." . "\n";
        echo "\n";
        echo "Escoge el tipo de operación a realizar :" . PHP_EOL; // PHP_EOL funciona igual que "\n"
        $opcion = (int) readline();
        PHP_EOL;
    }

    if ($opcion != 0) {
        echo "Escoge 2 operandos. Deben ser números enteros :\n";
    $x = (int)readline('Indica el primer número entero : '); // El comando readline() permite introducir valores por terminal
    $y = (int)readline('Indica el segundo número entero : ');
    echo "\n";
    echo "Nos has indicado los siguientes operandos : " . $x . " y ". $y . ".\n";
    }

    switch ($opcion) {
        case 1 :
            echo "Su suma : "; echo suma($x,$y) . PHP_EOL;
            break;
        case 2 :
            echo "Su diferencia : "; echo resta($x,$y) . PHP_EOL;
            break;
        case 3 :
            echo "Su producto : "; echo producto($x,$y) . PHP_EOL;
            break;
        case 4 :
            echo "Su división : "; echo division($x,$y) . PHP_EOL;
            break;
        case 5 :
            echo "Su residuo : "; echo residuo($x,$y) . PHP_EOL;
            break;
        case 0 :
            echo "Hasta pronto!!.";
            break;
        default :
            echo "La opción seleccionada no es válida";
            break;
    }
    echo "\n";

} while ($opcion != 0);

?>