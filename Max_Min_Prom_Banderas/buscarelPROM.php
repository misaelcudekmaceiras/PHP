<?php
/*El usuario ingresa numeros y le devolvemos el promedio de los numeros ingresados*/
$num=0;
$promedio=0;
$cant=0;
$acumulador=0;

do
{
$num=readline("Ingrese un numero distinto de 0, 0 para finalizar: ");
    if($num!=0)
    {
    $acumulador=$acumulador+$num;//acumulo numeros ingresados
    $cant++;//cuento cuantos numeros ingresan
    }

}while($num!=0);

$promedio=$acumulador/$cant;

echo "El promedio es ".$promedio."\n";

?>

