<?php

/*Definicion de una funcion, llamado de una funcion, funcion global*/

//recibo numero 0 a 6 devuelvo string dia de la semana en letras

$preciosiniva=10;
$iva=21;

$precioAcobrar=agregarIva($preciosiniva,$iva);

echo ("El precio con iva es  ".$precioAcobrar."\n");

function agregarIva($valor,$iva)
{
$precioConIva=$valor+$valor*($iva/100);

return($precioConIva);
}




?>

