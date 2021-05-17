<?php

/*Definicion de una funcion, llamado de una funcion, funcion global*/

//funcion1(); llamarla asi es un error, no existe sobrecarga

$variable=4;
echo("el valor antes de la funcion es : ".$variable."\n");
Sumale1($variable);
echo("el valor luego de la funcion es : ".$variable."\n");
/*¿Y entonces ahora porque si funciona?*/


function Sumale1(&$valor)
{
$valor=$valor+1;
}




?>
