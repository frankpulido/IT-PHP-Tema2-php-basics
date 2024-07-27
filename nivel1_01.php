<?php

/*
Frank Pulido - Tema 2 - Nivel 1 - Ejercicio 1
Preparar VS Code para trabajar con PHP :
https://www.w3schools.com/php/default.asp
Material del curso :
https://www.w3schools.com/php/default.asp

ENUNCIADO :
Define una variable de cada tipo: integer, double, string y boolean. Imprímelas por pantalla.
Después crea una constante que incluya tu nombre y muéstralo en formato título por pantalla.
NOTA : Al pedirme un formato "título, doy por entendido que desean que use una etiqueta de html.
*/

echo "\n";
echo "Me piden que imprima mi nombre en formato \"título\", supongo que con alguna etiqueta <h1></h1>, pero no usaré html.\n\n";
$integer = 5;
$_double = 3.1416;
$string1 = "IT Academy rocks!";
$_a_true_false_variable_is_boolean = true;

echo "El número $integer es un número entero y es primo.\n"; // Las secuencias de escape se hace con backslash como en Java.
echo "El número $_double se conoce como \"PI\" y es de tipo \"coma flotante\".\n";
echo "Una forma de decir \"La IT Academy mola\" en inglés sería (concateno una variable string) \"" . $string1 . "\"...\n";
echo "He creado una variable de tipo boolean con valor : ";
echo (($_a_true_false_variable_is_boolean)? "TRUE" : "FALSE") . "\n";
echo "\n";

 /*
Podemos insertar las variables en el texto o concatenar la expresión con puntos.
El texto puede ponerse entre comillas dobles o comillas simples.
Si en lugar de comillas dobles usásemos comillas simples estaríamos OBLIGADOS a concatenar con puntos y no podríamos usar la secuencia de escape /".
Todo lo que se escribe entre comillas simples sale por el ECHO tal cual como está escrito.
*/

echo "Existen 2 formas de declarar CONSTANTES, usaré ambas :\n";
define("MYNAME","Frank"); // Las constantes se declaran en mayúsculas. MYNAME es una constante. Ya no se acepta la definición de variables "case-insensitive" lo que se ponia en tercer parámetro de la función (true : no sensible / false : sensible).
const MINOMBRE = "Frank"; // Me gusta más esta forma de declarar variables, no pudiendo definir variables "case-insensitive" la anterior está obsoleta.

echo "My name is " . MYNAME . ", an IT Academy student.\n"; // Al no usar el $ no puedo insertar en el texto, debo concatenar necesariamente con puntos.
echo "Mi nombre es " . MINOMBRE . ", estudiante de la IT Academy.\n"; // La etiqueta <h2> es un elemento tipo "bloque". Por sto no usé <br> en la sentencia anterior.
echo "\n";

?>