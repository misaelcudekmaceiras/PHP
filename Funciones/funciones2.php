<?php

/*Definicion de una funcion, llamado de una funcion, funcion global*/

//funcion1(); llamarla asi es un error, no existe sobrecarga

funcion1("misa",34,"AaBbCc");


function funcion1($argu1, $argu2, $argu3)
{
  echo ("El primer argumento es ".$argu1."\n");
  echo ("El segundo argumento es ".$argu2."\n");
  echo ("El tercer argumento es ".$argu3."\n");
}




?>
