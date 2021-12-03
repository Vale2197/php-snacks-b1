<?php 

$invitati = [
    'Jim',
    'Pamela',
    'Michael',
    'Angela',
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack_2/2</title>
</head>
<body>
    <h1>
        <?php 
            if(in_array(ucwords($_GET['name']), $invitati)) {
                echo 'ok';
            }
            else {
                echo 'ko';
            }
        ?>
    </h1>
</body>
</html>