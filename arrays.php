<?php

//array asociativo

$datos = array("nombre" => "leonardo", "apellido" => "bernaez", "edad" => 33, "ciudad" => "caracas" );

//añadir un nuevo elemento al array
$datos["banda"]="megadeth";

//recorrer array asociativo con foreach
foreach ($datos as $clave=>$valor) {
	echo "el dato es $clave y su valor es $valor" . "<br>";
}

//echo "array indexado";

echo "<br>";

//array indexado
$datos = array("leonardo", "apellido", "bernaez", "edad", 33, "ciudad", "caracas" );

//recorrer array indexado con foreach
foreach ($datos as $dato) {
	echo "el dato es $dato". "<br>";
}

echo "<br/>";

//recorrer array indexado con for

for ($i=0; $i<count($datos); $i++){
	echo $datos[$i] . "<br>";
}

echo "<br/>"; 

//añadir un nuevo elemento al array
$datos[]="megadeth";

for ($i=0; $i<count($datos); $i++){
	echo $datos[$i] . "<br>";
}

//array multidimencional

$bandas = array("thrash"=>array("slayer", "metallica", "kreator"), 
				   "new"=>array("korn","papa roach", "system"),
				 "heavy" => array("maiden","priest", "sabbath"));


echo "<br>";

foreach ($bandas as $genero => $value) {
	echo "<strong>$genero</strong>" . "<br>";
		foreach ($value as $banda){
			echo "$banda" . "<br>";
		}
		echo "<br>";
	}
