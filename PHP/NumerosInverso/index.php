<?php

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Juego de los números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="juego.php" method="post">
    <fieldset>
        <legend><h1>Juego Adivina el número</h1></legend>
        <h2>Escoge una de las opciones de abajo:</h2>
        <fieldset>
            <!-- Recogemos número de intentos y número máximo-->
            <legend>Número de intentos</legend>
            <input type="radio" name="intentos" id="10" value="10" checked>
            <label for="10">1-1024(2<sup>10</sup>) = 10 intentos</label>
            <br>
            <input type="radio" name="intentos" id="16" value="16">
            <label for="16">1-65536(2<sup>16</sup>) = 16 intentos</label>
            <br>
            <input type="radio" name="intentos" id="20" value="20">
            <label for="20">1-1048576(2<sup>20</sup>) = 20 intentos</label>
        </fieldset>
        <br>
        <h2>Voy a pensar en un número de ese intervalo.</h2>
        <h2>¿Serás capaz de acertar el número en los intentos establecidos?</h2>
        <hr>
        <h2>Cada vez que me des un número te indicaré:</h2>
        <ul>
            <li>Si el número es ese</li>
            <li>Si el número mayor que ese</li>
            <li>Si el número menor que ese</li>
        </ul>
        <button type="submit" name="submit" value="start">A JUGAR!</button>
    </fieldset>
</form>
</body>
</html>
