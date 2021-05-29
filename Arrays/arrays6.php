<?php

/*array no indexado , tranformado a array indexado*/


$array = array("nombre" => "Misa", "edad" => 34);
print_r(array_values($array));

foreach($array as $valor)
{
echo($valor."\n");
}


//esta representacion falla
for($i=0;$i<count($array);$i++)
{
echo("la posicion ".$i." contiene ".$array[$i]."\n");
}
echo("\n");

$arrayindexado=array_values($array);

for($i=0;$i<count($arrayindexado);$i++)
{
echo("la posicion ".$i." contiene ".$arrayindexado[$i]."\n");
}
echo("\n");


?>
