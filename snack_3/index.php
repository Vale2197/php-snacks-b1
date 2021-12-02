<?php
/* Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z */

$posts = [
    '21-11-1997' => [
        'title' => 'post 1',
            [
                'autore' => 'persona 1',
            ],

            [
                'title' => 'post 1-2',
                'autore' => 'persona 1-2',
            ]
        ],
        '04-12-1997' => [
                [
                    'title' => 'post 1',
                    'autore' => 'persona 1',
                ],
            
                [
                    'title' => 'post 1-2',
                    'autore' => 'persona 1-2',
                ]
            ],
            '21-9-1960' => [
                [
                    'title' => 'post 1',
                    'autore' => 'persona 1',
                ],
        
                [
                    'title' => 'post 1-2',
                    'autore' => 'persona 1-2',
                ]
            ]
    ];

    for ($i=0; $i < count($posts) ; $i++) { 
        # code...
        var_dump($posts['21-11-1997']);
    }
?>