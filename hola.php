<?php //Etiqueta de apertura
echo "Hola\n"; //Vuelca el resultado al final
echo cos(4 * 3);
echo "\n";
$x = 5;
$y = 6;
echo $x + $y;
unset($y);//destruye una variable
echo $x + $y;

$x = $y; // Los dos comparten el mismo valor pero el enlace es individual
$x = &$y; // Los dos comparten el mismo valor y el enlace es compartido si cambia uno cambia el otro.

 //Etiqueta de Cierre?> 

