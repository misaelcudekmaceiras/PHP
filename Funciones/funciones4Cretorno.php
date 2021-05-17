<?php

/*Definicion de una funcion, llamado de una funcion, funcion global*/

//recibo numero 0 a 6 devuelvo string dia de la semana en letras
//si no alcanza ningun return se devuevle null al atajar un resultado

$diaenletras="";

$diaenletras=numADia(8);

echo ("El dia es ".$diaenletras."\n");

function numADia($dia)
{
if( ($dia>=0) && ($dia<=6))
{
switch($dia)
{
case 0:return("Domingo");
case 1:return("Lunes");
case 2:return("Martes");
case 3:return("Miercoles");
case 4:return("Jueves");
case 5:return("Viernes");
case 6:return("Sabado");

}


}


}




?>

