<?php

/*
Frank Pulido - Tema 2 - Nivel 2 - Ejercicio 2
Preparar VS Code para trabajar con PHP :
https://www.youtube.com/watch?v=WYsgnOal_u0
Material del curso :
https://www.w3schools.com/php/default.asp

ENUNCIADO:
Imagina que estamos en una tienda donde se vende:

    Chocolate: 1 euro
    Chicles: 0,50 euros
    Caramelos: 1,50 euros

Implementa un programa que permita añadir cálculos a un total de compras de ese tipo. Por ejemplo, que si compramos:
2 chocolates, 1 de chicles y 1 de caramelos, tengamos un programa que permita ir añadiendo los subtotales a un total, tal que así:
función(2 chocolates) + función(1 de chicles) + función(1 de carmelos) = 2 + 0.5 + 1.5
Siendo, por tanto, el total, 4.
*/

PHP_EOL;
echo "Bienvenido a IT Grocery Store ON-LINE, La reina del junk food..." . "\n";

$opcion1 = -1;
$opcion2 = -1;
$cantidad = 0;
$cantidad1 = 0;
$cantidad2 = 0;
$cantidad3 = 0;
$precio1 = 1;
$precio2 = 0.5;
$precio3 = 1.5;
$subtotal = 0;

do {
    do {
        $opcion1 = -1; // Debo inicializar : Después del cierre de este DO-WHILE invito al cliente a regresar ($opcion2)
        echo "NUESTRO MENÚ DE GOLOSINAS :". "\n";
        echo "1- Tableta de Chocolate (1 € IVA incluido)". "\n";
        echo "2- Caja de Chicles (0,50 € IVA incluido)". "\n";
        echo "3- Paquete de Caramelos (1,50 € IVA incluido)". "\n";
        echo "0- Ir al carrito de la compra" . "\n" . "\n";
        
        $cantidad = 0; // Inicializo en cada bucle

        do {
            $opcion1 = (int)readline("Indique el producto que desea comprar (opción 1 al 3, o \"0\" (cero) para salir): ");
            PHP_EOL;
            if($opcion1 < 0 || $opcion1 >3) {echo "La opción seleccionada no es válida. Introduzca de nuevo" . PHP_EOL;}
        } while ($opcion1 < 0 || $opcion1 >3);
        PHP_EOL;

        if ($opcion1 != 0) {
            do {
                $cantidad = (int) readline("Cantidad deseada : ");
                if($cantidad < 0) {echo "No puede comprar una cantidad \"negativa\" de producto. Introduzca de nuevo el valor." . PHP_EOL;}
            } while ($cantidad < 0);
        }
        PHP_EOL;
        
        switch ($opcion1){        
            case 0 :
                echo "Le dirigimos al carrito de compra. Gracias por comprar en IT Grocery.";
                break;
            case 1 :
                $cantidad1 = $cantidad1 + $cantidad;
                echo "Se han agregado " . $cantidad . " unidades de \"Tableta de Chocolate\" a su carrito de la compra";
                break;
            case 2 :
                $cantidad2 = $cantidad2 + $cantidad;
                echo "Se han agregado " . $cantidad . " unidades de \"Caja de Chicles\" a su carrito de la compra";
                break;
            case 3 :
                $cantidad3 = $cantidad3 + $cantidad;
                echo "Se han agregado " . $cantidad . " unidades de \"Paquete de Caramelos\" a su carrito de la compra";
                break;
            default :
                echo "Debe seleccionar una opción válida.";
                break;
        }
    } while ($opcion1 != 0);

    PHP_EOL;
    echo "El detalle de su compra de hoy :" . "\n";
    if ($cantidad1 > 0) {echo "Tabletas de chocolate : " . $cantidad1 . " unidades. Precio (" . $precio1 . " €/unidad). Subtotal = " . ($cantidad1 * $precio1) . " €.";}
    if ($cantidad2 > 0) {echo "Cajas de chicle : " . $cantidad2 . " unidades. Precio (" . $precio2 . " €/unidad). Subtotal = " . ($cantidad2 * $precio2) . " €.";}
    if ($cantidad3 > 0) {echo "Paquetes de caramelos : " . $cantidad3 . " unidades. Precio (" . $precio3 . " €/unidad). Subtotal = " . ($cantidad3 * $precio3) . " €.";}
    PHP_EOL;

    do {
        $opcion2 = (int)readline("Desea continuar comprando? 1 = Continuar comprando / 2 = Salir.");
        PHP_EOL;
        if($opcion2 < 1 || $opcion2 > 2) {echo "La opción seleccionada no es válida. Introduzca de nuevo su opción :" . PHP_EOL;}
    } while ($opcion2 < 1 || $opcion2 > 2);

} while ($opcion2 != 0);

PHP_EOL;
$subtotal = $cantidad1 * $precio1 + $cantidad2 * $precio2 + $cantidad3 * $precio3;
if ($subtotal > 0) {
    echo "Total a pagar : " . $subtotal . " €." . "\n";
    echo "Gracias por comprar en IT Grocery";
}
else {echo "Gracias por comprar en IT Grocery";}

?>