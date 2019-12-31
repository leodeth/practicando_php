<?php

//buscar elemento unico en array
//array_count_values solo funciona con numeros enteros y cadenas

$array1 = [ 1, 2, 1, 1, 1, 1 ];
$array2 = [ 0, 0, 8, 0, 0,0 ];

$counts = array_count_values($array1);  // since php4
print_r($counts);
foreach ($counts as $value => $count) {
    if ($count == 1) {
        $uniques[] = $value;
    } else {
        $duplicates[] = $value . "<br>";
    }
}

//implode: Join array elements with a string


//echo "unique values: " , implode(", ", $uniques) , "\n";
//echo "duplicate values: " , implode(", ", $duplicates);

echo "unique values: " , implode($uniques) , "\n";
echo "duplicate values: " , implode($duplicates);
