<?php

/*
Frank Pulido - Tema 2 - Nivel 2 - Ejercicio 2
Preparar VS Code para trabajar con PHP :

Windows : https://www.youtube.com/watch?v=WYsgnOal_u0

MacOS :
https://alextech.tips/mac-os-x-vs-code-php-executablepath-error-how-to-fix-it/
(Reinstalar PHP por Terminal usando HomeBrew)
También este video :
https://www.youtube.com/watch?v=amS-yBiAL5s

Para conseguir que la DEBUG Console funcionase :
https://dev.to/yongdev/how-to-debug-php-using-xdebug-on-vscode-3n4
Installing with PECL : https://xdebug.org/docs/install#pecl
Teniendo HomeBrew ya instalado, ejecutar en Terminal : xcode-select --install
Output al final de instalación :
Build process completed successfully
Installing '/usr/local/Cellar/php/8.3.9/pecl/20230831/xdebug.so'
install ok: channel://pecl.php.net/xdebug-3.3.2
Extension xdebug enabled in php.ini
frankpulidoalvarez@Franks-iMac ~ % 

La ruta a php.ini la obtengo ejecutando un archivo de prueba test.php que incluya la sentencia : phpinfo()
Entre el extenso output me encuentro :
"Configuration File (php.ini) Path => /usr/local/etc/php/8.3"
"Loaded Configuration File => /usr/local/etc/php/8.3/php.ini"

xDebug sigue sin funcionar

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

"\n";
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
$subtotal = $cantidad1 * $precio1 + $cantidad2 * $precio2 + $cantidad3 * $precio3;

do {
    do {
        "\n";
        "\n";
        echo "NUESTRO MENÚ DE GOLOSINAS :". "\n";
        echo "1- Tableta de Chocolate (1 € IVA incluido)". "\n";
        echo "2- Caja de Chicles (0,50 € IVA incluido)". "\n";
        echo "3- Paquete de Caramelos (1,50 € IVA incluido)". "\n";
        echo "0- Ir al carrito de la compra" . "\n" . "\n";
        
        do {
            $opcion1 = (int)readline("Indique el producto que desea comprar (opción 1 al 3). Pulse \"0\" (cero) para ver su carrito de la compra : ");
            PHP_EOL;
            if($opcion1 < 0 || $opcion1 > 3) {echo "La opción seleccionada no es válida. Introduzca de nuevo" . PHP_EOL;}
        } while ($opcion1 < 0 || $opcion1 > 3);
        /*
        Este DO-WHILE no me evita la entrada de valores erroneos como un 2.5
        Probé ($opcion1 != 0 && $opcion1 != 1 && $opcion1 != 2 && $opcion1 != 3), nada elegante, pero tampoco funciona.
        El casting a (int) toma el readline de 2.5 como un 2.
        */
        "\n";

        if ($opcion1 != 0) {
            do {
                $cantidad = (int) readline("Cantidad deseada : ");
                if($cantidad < 0) {echo "No puede comprar una cantidad \"negativa\" de producto. Introduzca de nuevo el valor." . PHP_EOL;}
            } while ($cantidad < 0);
        }
        "\n";
        
        switch ($opcion1){        
            case 0 :
                echo "Le dirigimos al carrito de compra. Gracias por comprar en IT Grocery." . "\n" . "\n";
                break;
            case 1 :
                $cantidad1 = $cantidad1 + $cantidad;
                echo "Se han agregado " . $cantidad . " unidades de \"Tableta de Chocolate\" a su carrito de la compra." . "\n" . "\n";
                break;
            case 2 :
                $cantidad2 = $cantidad2 + $cantidad;
                echo "Se han agregado " . $cantidad . " unidades de \"Caja de Chicles\" a su carrito de la compra." . "\n" . "\n";
                break;
            case 3 :
                $cantidad3 = $cantidad3 + $cantidad;
                echo "Se han agregado " . $cantidad . " unidades de \"Paquete de Caramelos\" a su carrito de la compra." . "\n" . "\n";
                break;
            default :
                echo "Debe seleccionar una opción válida." . "\n"; // Si el usuario atribuyese a $opcion1 cualquier valor no válido (ejemplo : 2.5) acabará aquí y volverá al menú
                break;
        }
    } while ($opcion1 != 0);

    "\n";
    echo "El detalle de su compra de hoy :" . "\n";
    if ($cantidad1 > 0) {echo "Tabletas de chocolate : " . $cantidad1 . " unidades. Precio (" . $precio1 . " €/unidad) = " . ($cantidad1 * $precio1) . " €." . "\n";}
    if ($cantidad2 > 0) {echo "Cajas de chicle : " . $cantidad2 . " unidades. Precio (" . $precio2 . " €/unidad) = " . ($cantidad2 * $precio2) . " €." . "\n";}
    if ($cantidad3 > 0) {echo "Paquetes de caramelos : " . $cantidad3 . " unidades. Precio (" . $precio3 . " €/unidad) = " . ($cantidad3 * $precio3) . " €." . "\n";}

    $subtotal = $cantidad1 * $precio1 + $cantidad2 * $precio2 + $cantidad3 * $precio3;
    "\n";
    echo "El sub-total de su carrito de compra : " . $subtotal . " €.";
    "\n";
    do {
        $opcion2 = (int)readline("Desea continuar comprando? 1 = Continuar comprando / 0 = Salir." . "\n");
        if($opcion2 != 1 && $opcion2 != 0) {echo "La opción seleccionada no es válida. Introduzca de nuevo su opción :" . PHP_EOL;}
    } while ($opcion2 != 1 && $opcion2 != 0);
    "\n";

} while ($opcion2 != 0);

"\n";
"\n";

if ($subtotal > 0) {
    echo "Total a pagar : " . $subtotal . " €." . "\n";
    echo "Gracias por comprar en IT Grocery";
}
else {echo "Gracias por comprar en IT Grocery";}

?>