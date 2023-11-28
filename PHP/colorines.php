<?php

$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
$color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];

?>

<!DOCTYPE html>

<html lang="es">
    <head>
        <title></title>
        <meta http-equiv="refresh" content="0.05">
    </head>
    <body style="background-color: <?php echo $color; ?>">
    </body>
</html>
