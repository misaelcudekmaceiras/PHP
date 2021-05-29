<?php
$array = array(1, 2, 3, 4, 5);
//print_r($array);


$array3 = array(0 => 'lunes' ,1 => 'martes',2 => 'miercoles',
3 => 'jueves',4 => 'viernes',5 => 'sabado',6 => 'domingo');
//print_r($array3);

for($i=0;$i<count($array);$i++)
{
echo("la posicion ".$i." contiene ".$array[$i]."\n");
}
echo("\n");
for($i=0;$i<count($array3);$i++)
{
echo("la posicion ".$i." contiene ".$array3[$i]."\n");
}


?>
