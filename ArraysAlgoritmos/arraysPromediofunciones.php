<?php

$prom=0;
$numeros = array(1,2,3,4,5);
$prom=promedio($numeros);


 echo("El promedio es  ".$prom."\n");




function promedio($array)
{
$prm=0;
$acum=0;
for($i=0;$i<count($array);$i++)
{
$acum=$acum+$array[$i];
}
$prm=$acum/count($array);
return($prm);


}



?>
