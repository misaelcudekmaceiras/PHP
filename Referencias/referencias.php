<?php

$var=123;
$refe=&$var;

echo("el valor de \$var  es ".$var."\n");
echo("el valor de \$refe  es ".$refe."\n");

$var++;

echo("el valor de \$var  es ".$var."\n");
echo("el valor de \$refe  es ".$refe."\n");

?>
