<?php
/*
Frank Pulido - Tema 2 - Nivel 1 - Ejercicio 3
Preparar VS Code para trabajar con PHP :
https://www.youtube.com/watch?v=WYsgnOal_u0
Material del curso :
https://www.w3schools.com/php/default.asp

ENUNCIADO :


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
    echo $a % $b;
}

function todas($a,$b) {
    echo "Tenemos 2 variables de tipo entero con las que vamos a operar. X = " . $a . " y Y = " . $b . "." . PHP_EOL;
    echo "Su suma : "; echo suma($a,$b) . PHP_EOL;
    echo "Su diferencia : "; echo resta($a,$b) . PHP_EOL;
    echo "Su producto : "; echo producto($a,$b) . PHP_EOL;
    echo "Su división : "; echo division($a,$b) . PHP_EOL;
    echo "Su residuo : "; echo residuo($a,$b) . PHP_EOL;
}

todas($x,$y);
PHP_EOL;
echo "\n";
echo "Ahora usemos variables de coma flotante : " . "\n";
todas($n,$m);

PHP_EOL;
echo "\n";

// Calculadora
echo "Ahora escoge tu las variables. Deben ser 2 números enteros : " . "\n";
$x = (int)readline('Indica el primer número entero : '); // El comando readline() permite introducir valores por terminal
echo "\n";
$y = (int)readline('Indica el segundo número entero : ');
echo "\n";
echo "Nos has indicado los siguientes operandos : " . $x . " y ". $y . ".\n";

$opcion = 0;

while ($opcion<1 || $opcion>5) {
    echo "Escoge el tipo d eoperación a realizar :" . PHP_EOL; // PHP_EOL funciona igual que "\n"
    echo "1. Suma ". "\n" . "2. Resta.". "\n" . "3. Multiplicación.". "\n" . "4. División.". "\n" . "5. Residuo." . "\n";
    $opcion = (int) readline();
    PHP_EOL;
}

if ($opcion == 1) {
    echo "Su suma : "; echo suma($x,$y) . PHP_EOL;
} elseif ($opcion == 2) {
    echo "Su diferencia : "; echo resta($x,$y) . PHP_EOL;
} elseif ($opcion == 3) {
    echo "Su producto : "; echo producto($x,$y) . PHP_EOL;
} elseif ($opcion == 4) {
    echo "Su división : "; echo division($x,$y) . PHP_EOL;
} else {
    echo "Su residuo : "; echo residuo($x,$y) . PHP_EOL;
}

?>