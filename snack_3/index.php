<?php
/* Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z */

$posts = [
    '21-11-1997' => [
            [
                'title' => 'post 1',
                'autore' => 'persona 1',
            ],

            [
                'title' => 'post 1-2',
                'autore' => 'persona 1-2',
            ]
        ],
        '04-12-1997' => [
                [
                    'title' => 'post 2',
                    'autore' => 'persona 2',
                ],
            
                [
                    'title' => 'post 2-2',
                    'autore' => 'persona 2-2',
                ]
            ],
            '21-9-1960' => [
                [
                    'title' => 'post 3',
                    'autore' => 'persona 3',
                ],
        
                [
                    'title' => 'post 3-2',
                    'autore' => 'persona 3-2',
                ]
            ]
    ];

  var_dump($posts[1]);

  for ($i=0; $i < count($posts['21-11-1997']) ; $i++) { 
     $element = $posts['21-11-1997'][$i];
     var_dump($element);
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack_3</title>
</head>
<body>
    <h2>
       21-11-1997
    </h2>
    <p>
        <?php
            for ($i=0; $i < count($posts['21-11-1997']) ; $i++) { 
                $element = $posts['21-11-1997'][$i];
                echo 'titolo: ' . $element['title'] . '<br>';
                echo 'autore: ' . $element['autore'] . '<br>';
                echo '------ <br>'; 
             }
        ?>
    </p>

    <h2>
        04-12-1997
    </h2>
    <p>
        <?php
            for ($i=0; $i < count($posts['04-12-1997']) ; $i++) { 
                $element = $posts['04-12-1997'][$i];
                echo 'titolo: ' . $element['title'] . '<br>';
                echo 'autore: ' . $element['autore'] . '<br>';
                echo '------ <br>'; 
             }
        ?>
    </p>
</body>
</html>