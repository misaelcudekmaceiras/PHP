<?php

/**/


$array = array("juan", "pedro", "pablo", "jose");
//print_r($array);




for($i=0;$i<count($array);$i++)
{
echo("la posicion ".$i." contiene ".$array[$i]."\n");
}
echo("\n");

//agrego un elemento
$array[4]="ezequiel";

for($i=0;$i<count($array);$i++)
{
echo("la posicion ".$i." contiene ".$array[$i]."\n");
}

//quito un elemento
unset($array[1]);

for($i=0;$i<count($array);$i++)
{
echo("la posicion ".$i." contiene ".$array[$i]."\n");
}
//se remueve el elemento 1.

?>
