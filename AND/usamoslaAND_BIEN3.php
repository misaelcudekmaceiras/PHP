<?php

$caminoTipo="ruta";
$velocidad=120;




if( ($caminoTipo=="calle") &&  ($velocidad>40) )
{
echo ("Foto Multa Vel Max:40 "."\n");
}
if( ($caminoTipo=="avenida") &&  ($velocidad>60) )
{
echo ("Foto Multa Vel Max:60"."\n");
}
if( ($caminoTipo=="ruta") &&  ($velocidad>110) )
{
echo ("Foto Multa Vel Max:110"."\n");
}




?>
