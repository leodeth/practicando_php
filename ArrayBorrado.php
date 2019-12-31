<?php

//borrar elementos del primer array que son iguales a los del segundo array


$array1 = [1,2,3,4];
$array2 = [4,2,1];
print_r($array1);
echo "<br>";

foreach ($array2 as $valor) {
	foreach ($array1 as $valor2) {
		if($valor == $valor2){
			//echo "coincidencia" . "<br>";
			echo "$valor2" . "<br>";
			$borrar=array_search($valor,$array1);
			unset($array1[$borrar]);			
		}	
	}
}
print_r($array1);
