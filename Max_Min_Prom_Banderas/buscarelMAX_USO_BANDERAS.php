<?php
//https://www.php.net/manual/es/language.types.integer.php
$num=0;
$max=0;
$eselprimero=true;
//ingresar numeros hasta que el numero ingresado sea el 0.
//al final voy a decir cual es el numero mas grande
//de los ingresados

do
{
$num=readline("Ingrese un numero distinto de 0, 0 para finalizar: ");
//este if se ejecuta solo desde el segundo numero en adelante
if($num>$max && $eselprimero==false)
    {
    /*si el numero ingresado por el usuario es mas grande que el que yo
    conozco como mas grande hasta ese momento, entonces es el nuevo maximo*/
    $max=$num;
    }
//este if se ejecuta solo cuando se ingresa el primer numero
if($num!=0 && $eselprimero==true)
    {
    $eselprimero=false;
    $max=$num;
    }
}while($num!=0);

echo "El mayor int es ".$max."\n";

?>

