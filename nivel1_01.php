<?php

/*
Frank Pulido - Tema 2 - Nivel 1 - Ejercicio 1
Preparar VS Code para trabajar con PHP :
https://www.w3schools.com/php/default.asp
*/

/*
echo 'Variables soportadas por PHP :
String<br>
Integer<br>
Float (floating point numbers - also called double)<br>
Boolean<br>
Array<br>
Object<br>
NULL<br>
Resource<br>
var_dump() : To get the data type of a variable, use the var_dump() function.
valiable scope : LOCAL - GLOBAL - STATIC. The scope of a variable is the part of the script where the variable can be referenced/used.
- A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function.
- A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function.
- The global keyword is used to access a global variable from within a function. To do this, use the global keyword before the variables (inside the function):

    $x = 5;
    $y = 10;
    function myTest() {
    global $x, $y;
    $y = $x + $y;
    }
    myTest();
    echo $y; // outputs 15
    PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions
    and can be used to update global variables directly :
    
    $x = 5;
    $y = 10;
    function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    
    myTest();
    echo $y; // outputs 15
    PHP The static Keyword
    Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
    To do this, use the static keyword when you first declare the variable:
    
    function myTest() {
    static $x = 0;
    echo $x;
    $x++;
    }
    
    myTest();
    myTest();
    myTest();
*/

$integer = 5;
$_double = 3.1416;
$string1 = "IT Academy rocks!";
$_a_true_false_variable_is_boolean = true;

echo "<h2>Enunciado :</h2>";
echo "Defineix una variable de cada tipus: integer, double, string i boolean. Imprimeix-les per pantalla.
Després crea una constant que inclogui el teu nom i mostra-ho en format títol per pantalla.<br><br>";

echo "$integer es un número entero y es primo<br>"; // echo se puede usar CON y SIN paréntesis
echo ("el número $_double se conoce como \"PI\" y es de tipo \"coma flotante\".<br>"); // Las secuencias de escape se hace con backslash como en Java.
echo "Una forma de decir \"La IT Academy mola\" en inglés sería \"" . $string1 . "\"...<br>";
 /*
Podemos insertar las variables en el texto o concatenar la expresión con puntos.
El texto puede ponerse entre comillas dobles o comillas simples.
Si en lugar de comillas dobles usásemos comillas simples estaríamos OBLIGADOS a concatenar con puntos y no podríamos usar la secuencia de escape /".
*/

define("MYNAME","Frank"); // Las constantes se declaran en mayúsculas. MYNAME es una constante. Ya no se acepta la definición de variables "case-insensitive" lo que se ponia en tercer parámetro de la función (true : no sensible / false : sensible).

const MINOMBRE = "Frank"; // Me gusta más esta forma de declarar variables, no pudiendo definir variables "case-insensitive" la anterior está obsoleta.
echo "<h2>My name is " . MYNAME . ", an IT Academy student</h2>"; // Al no usar el $ no puedo insertar en el texto, debo concatenar necesariamente con puntos.
echo "<h2>Mi nombre es " . MINOMBRE . ", estudiante de la IT Academy</h2><br>"; // La etiqueta <h2> es un elemento tipo "bloque". Por sto no usé <br> en la sentencia anterior.
echo "En el código he comentado el uso de variables de tipo GLOBAL, LOCAL y STATIC."

?>