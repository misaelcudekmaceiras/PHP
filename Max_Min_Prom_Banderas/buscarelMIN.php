<?php
//https://www.php.net/manual/es/language.types.integer.php
$num=0;
$min=PHP_INT_MAX;
//ingresar numeros hasta que el numero ingresado sea el 0.
//al final voy a decir cual es el numero mas chico
//de los ingresados

do
{
$num=readline("Ingrese un numero distinto de 0, 0 para finalizar: ");
if($num<$min)
    {
    /*si el numero ingresado por el usuario es mas grande que el que yo
    conozco como mas grande hasta ese momento, entonces es el nuevo maximo*/
    $min=$num;
    }

}while($num!=0);

echo "El menor int es ".$min."\n";

?>

