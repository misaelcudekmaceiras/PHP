<?php


$array = array("nombre" => "Misa", "edad" => 34);
print_r(array_values($array));

foreach($array as $x => $x_value) 
{
  echo ("Clave=" . $x . ", Valor=" . $x_value."\n");
}


?>
