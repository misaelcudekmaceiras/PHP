<?php

/*Definicion de una funcion, llamado de una funcion, funcion global*/
/*estadostock (stock,minimo,maximo)*/


estadostock(34,20,100); //normal
//estadostock(3,20,100); //bajo
//estadostock(500,20,100); //alto
//estadostock(-3,20,100); //error

function estadostock($stock, $min, $max)
{

if($stock>=0)
{
    if($stock<$min)
    {
        echo ("Stock bajo"."\n");
    }
    if(($stock>=$min) && ($stock<=$max) )
    {
        echo ("Stock Normal"."\n");
    }
    if($stock>$max)
    {
        echo ("Stock Alto"."\n");
    }
}
else
{
        echo ("Stock No valido, Error"."\n");
}




}




?>
