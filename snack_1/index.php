<?php
/* Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */

$array = [
    [
        "data"  => "sabato 8",
        "punteggio" => "55-60",
        "sCasa" => "Olimpia Milano",
        "sOspite" => "Cantu",
               
    ],

    [
        "data"  => "sabato 9", 
        "sCasa" => "napoli",
        "sOspite" => "squadra",
        "punteggio" => "22-30",
       
    ],

    [
        
        "data"  => "sabato 10", 
        "sCasa" => "roma",
        "sOspite" => "Cantu",
        "punteggio" => "30-40",

    ]
    
];

var_dump($array[0]['data']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partite</title>
</head>
<body>
    
<h1>
    squadre
</h1>

    <!-- Olimpia Milano - Cantù | 55-60 */ -->

    <?php

       for ($i=0; $i < count($array); $i++) {
            echo '<p>';
          echo 'data: ' . $array[$i]['data'] . '<br>';
          echo $array[$i]['sCasa'] . ' - ' . $array[$i]['sOspite'] . ' | ' . $array[$i]['punteggio'];
          echo '</p>';
            
        } 
    
    ?>
    
</body>
</html>