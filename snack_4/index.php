<?php 
/* Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta */
$numbers = [];

while ($i < 15) {
    # code...
    $randomN = rand(0, 100);

    if(!in_array($randomN, $numbers)) {
        $numbers[] = $randomN;
    }

    $i ++;
};

var_dump($numbers);


?>