<?php

/*Definicion de una funcion, llamado de una funcion, funcion global*/

//No retornar tipos distintos

$retorno="";

for($i=0;$i<4;$i++)
{
$retorno=testDistintosReturns($i);
echo ("El valor retornado fue ".$retorno."\n");
echo ("El tipo retornado fue ".var_dump($retorno)."\n");
}




function testDistintosReturns($dia)
{
if( ($dia>=0) && ($dia<=6))
{
switch($dia)
{
case 0:return("Domingo");
case 1:return(true);
case 2:return(1.3);
case 3:return(4);
}


}


}




?>

