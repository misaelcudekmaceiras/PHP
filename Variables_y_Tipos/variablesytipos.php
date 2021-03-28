<?php
/*
PHP admite diez tipos primitivos.

Cuatro tipos escalares:

boolean
integer
float (número de punto flotante, también conocido como double)
string

Cuatro tipos compuestos:

array
object
callable
iterable
Y finalmente dos tipos especiales:

resource
NULL
*/

$texto = "Variables de texto, el valor va entre comillas!";
$numeroentero = 99;
$numeroconcoma = 3.141516;
$presente= true;

echo ($texto."\n");
var_dump($texto);

echo ($numeroentero);
var_dump($numeroentero);

echo ($numeroconcoma);
var_dump($numeroconcoma);

echo ($presente);
var_dump($presente);
?>
