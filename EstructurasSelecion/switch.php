<?php

$dia=-1;//cambiar el valor para probar todos los casos
echo ("Ejemplo de uso del switch"."\n");

$dia=readline("Ingrese un numero del 0 al 6:  ");

          
switch($dia)
{
default:echo("Error"."\n");break;
case 0:echo("Domingo"."\n");break;
case 1:echo("Lunes"."\n");break;
case 2:echo("Martes"."\n");break;
case 3:echo("Miercoles"."\n");break;
case 4:echo("Jueves"."\n");break;
case 5:echo("Viernes"."\n");break;
case 6:echo("Sabado"."\n");break;
}



?>
