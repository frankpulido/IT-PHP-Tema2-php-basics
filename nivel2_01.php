<?php

/*
Frank Pulido - Tema 2 - Nivel 2 - Ejercicio 1
Preparar VS Code para trabajar con PHP :
https://www.youtube.com/watch?v=WYsgnOal_u0
Material del curso :
https://www.w3schools.com/php/default.asp

ENUNCIADO:
"Escribe una función que determine la cantidad total a pagar por una llamada telefónica según las siguientes premisas:
- Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos.
- Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5 céntimos..
*/

echo "El servicio de ITcalling se tarifica a 10 céntimos por los primeros 3 minutos y 5 céntimos por minuto cada minuto adicional o fracción" . "\n";

$cost = 0;

$time = (float)readline("Por favor, indique la duración de la llamada :");
PHP_EOL;

function cost ($call_time) {
    if ($call_time <= 3) {
        echo "El coste de la llamada es de 10 céntimos.";
    } else {
        $cost = 10 + 5* ceil($call_time - 3); // Entiendo que si la llamada dura 4,5 minutos pagaremos por 5 minutos (tarifa por minuto o fracción).
        echo "El coste de la llamada es de $cost céntimos.";
    } 
}

cost($time);

?>