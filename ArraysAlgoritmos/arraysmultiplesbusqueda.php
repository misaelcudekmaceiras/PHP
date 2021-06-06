<?php
$existe=false;
$posexiste=-1;
$arraynombre = array("juan", "pedro", "pablo", "jose","soledad","joaquin");
$arrayedad = array(33, 22, 2, 99,43,66);
//print_r($array);


for($i=0;$i<count($arraynombre);$i++)
{
    if($arraynombre[$i]=="jose")
    {
    $existe=true;
    $posexiste=$i;
    break;
    }
}
if($existe==true)
    {
    echo("El nombre ".$arraynombre[$i]." existe y esta en la posicion ".$i."  y tiene ".$arrayedad[$i]." años "."\n");
    }


echo("\n");


?>
