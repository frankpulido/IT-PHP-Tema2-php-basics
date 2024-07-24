<?php
/*
Preparar VS Code para trabajar :
https://www.youtube.com/watch?v=WYsgnOal_u0
Material del curso :
https://www.w3schools.com/php/default.asp

Enunciado :
Imprimeix per pantalla "Hello, World!" utilitzant una variable. En acabat :
Transforma tots els caràcters de l'string a majúscules i imprimeix en pantalla.
Imprimeix per pantalla la mida (longitud) de la variable.
Imprimeix per pantalla l'string en ordre invers de caràcters.
Crea una nova variable amb el contingut “Aquest és el curs de PHP” i imprimeix per pantalla la concatenació de tots dos strings.

https://www.w3schools.com/php/php_string.asp
https://www.w3schools.com/php/php_ref_string.asp
The PHP strlen() function returns the length of a string.
The PHP str_word_count() function counts the number of words in a string.
The PHP strpos() function searches for a specific text within a string.
The strtoupper() function returns the string in upper case.
The strtolower() function returns the string in lower case.
The PHP str_replace("original", "new", $string_variable) function replaces some characters with some other characters in a string variable.
The PHP strrev() function reverses a string.
The trim() removes any whitespace from the beginning or the end. Whitespace is the space before and/or after the actual text, and very often you want to remove this space.
The PHP explode() function splits a string into an array.
The count_chars() function returns information about characters used in a string.
CONCATENATE : $z = $x . $y; (. is like "+")
CONCATENATE WITH A BLANK SPACE : $z = "$x $y"; (or anything you want before - within - after)
SLICE TO THE END : $x = "Hello World!"; // echo substr($x, 6); OUTPUT : World!
SLICE TO THE END : $x = "Hello World!"; // echo substr($x, 6, 3); OUTPUT : Wor
SLICE FROM THE END : $x = "Hello World!"; // echo substr($x, -5, 3); OUTPUT : orl
NEGATIVE LENGTH : $x = "Hi, how are you?"; // echo substr($x, 5, -3); OUTPUT : ow are y (ENTRE LA POSICIÓN 5 Y LA POSICIÓN -3)
The str_shuffle() function randomly shuffles all characters in a string.

*/
$greeting = "Hello World";
echo $greeting . PHP_EOL; // La instrucción a partir del punto es un salto de línea
$greeting = strtoupper($greeting);
echo $greeting . "\n"; // La instrucción a partir del punto es un salto de línea
echo "La variable tiene una longitud de " . strlen("$greeting") . " \"caracteres\"." . PHP_EOL;
echo strrev($greeting) . PHP_EOL;
$curso = "Este es el curso de PHP.";
echo "$greeting : $curso";
?>