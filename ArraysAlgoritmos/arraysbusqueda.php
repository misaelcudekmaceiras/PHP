<?php
$existe=false;
$posexiste=-1;
$array = array("juan", "pedro", "pablo", "jose","alejandro","joaquin");
//print_r($array);


for($i=0;$i<count($array);$i++)
{
    if($array[$i]=="jose")
    {
    $existe=true;
    $posexiste=$i;
    break;
    }
}
if($existe==true)
    {
    echo("El nombre ".$array[$i]." existe y esta en la posicion ".$i."\n");
    }


echo("\n");


?>
