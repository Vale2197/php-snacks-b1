<?php 
    /* Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. */
    $alunni = [
        [
            'nome' => 'a',
            'cognome' => 'aa',
            'voti' => [4, 5, 6, 3, 2, 4],
        ],
        [
            'nome' => 'b',
            'cognome' => 'bb',
            'voti' => [3, 10, 8, 4, 7, 2],
        ],
        [
            'nome' => 'c',
            'cognome' => 'cc',
            'voti' => [10, 5, 6, 8, 9, 10],
        ],
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack_7</title>
</head>
<body>
    <?php 
         for ($i=0; $i < count($alunni); $i++) { 
            $alunno = $alunni[$i];
            $sommaVoti = array_sum($alunno['voti']);
            $media = $sommaVoti / count($alunno['voti']);
            echo '<h2>';
            echo 'nome alunno: ' . $alunno['nome'] . '<br>';
            echo 'cognome alunno: ' . $alunno ['cognome'] . '<br>';
            echo 'media voti: ' . ceil($media) . '<br>';
            echo '------';
            echo '</h2>';
            
        }
    ?>
</body>
</html>