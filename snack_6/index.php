<?php 
/* Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. */

$array = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack_6</title>
    <style>
        .grey {
            padding: 3rem;
            background-color: lightgrey;
        }
        .green {

            padding: 3rem;
            background-color: lightgreen;
        }
    </style>
</head>
<body>
      
    <?php 
        foreach ($array as $key => $value) { ?>
           <h1>
               <?php echo $key; ?>
           </h1> 

            <?php if($key == 'teachers') { ?>
                <div class="grey">
                    <?php for ($i=0; $i < count($value); $i++) { ?>
                        <p>
                        <?php echo $value[$i]['name'] . '<br>'; 
                                echo $value[$i]['lastname'] . '<br>';
                        ?>
                        </p>
                    <?php } ?>
                </div>
               
           <?php }
            else {
                echo '<div class="green">';
                    for ($i=0; $i < count($value); $i++) {
                        echo '<p>';
                            echo $value[$i]['name'] . '<br>';
                            echo $value[$i]['lastname'] . '<br>';
                        echo '</p>';
                    };
                echo '</div>';
            }
        }?>
    
</body>
</html>