<?php
$estudiar=true;
$dormir=true;
$vidasoc=true;



if($estudiar==true && $dormir==true && $vidasoc==true)
{
echo ("Desafia leyes fisica"."\n");
}
if($estudiar==true && $dormir==true && $vidasoc==false)
{
echo ("Nerd"."\n");
}
if($estudiar==true && $dormir==false && $vidasoc==true)
{
echo ("Zombi"."\n");
}
if($estudiar==false && $dormir==true && $vidasoc==true)
{
echo ("Vago"."\n");
}




?>
