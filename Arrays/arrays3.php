<?php
$array = array(1, 2, 3, 4, 5);
//print_r($array);


$array3 = array(0 => 'lunes' ,1 => 'martes',2 => 'miercoles',
3 => 'jueves',4 => 'viernes',5 => 'sabado',6 => 'domingo');
//print_r($array3);

foreach($array as $valordelaiteracion)
{
echo($valordelaiteracion."\n");
}
echo("\n");
foreach($array3 as $valordelaiteracion)
{
echo($valordelaiteracion."\n");
}



?>
