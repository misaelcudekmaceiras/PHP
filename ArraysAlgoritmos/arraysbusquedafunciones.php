<?php

$pos=-1;
$nombres = array("juan", "pedro", "pablo", "jose","alejandro","joaquin");
$pos=buscarNombre($nombres,"misa");

if($pos!=-1 && $pos!=null)
{
 echo("El nombre esta en ".$pos."\n");
}



function buscarNombre($array,$nombre)
{
$existe=false;
for($i=0;$i<count($array);$i++)
{
    if($array[$i]==$nombre)
    {
    $existe=true;
    $posexiste=$i;
    break;
    }
}
if($existe==true)
    {
    return($posexiste);
    }


echo("\n");

}



?>
