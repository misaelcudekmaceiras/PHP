<?php
$numero=0;

for($numero=0;$numero<60;$numero++)
{
echo ("El valor es ".$numero."\n");

if($numero==56)
{
echo ("Encontre lo que buscaba rompo el for"."\n");
break;
}

}


echo ("Al finalizar el do while el valor es ".$numero."\n");



?>
