<?php

//$intentos = 0;
//$rango = 0;
//$min = 0;
//$max = 0;
//$jugada = 0;
//$numero = 0;

$opcion = $_POST['submit'] ?? "Por";

switch ($opcion) {
    case "start":
        $min = 0;
        $max = 2 ** $_POST['intentos'];
        $intentos = $_POST['intentos'];
        $jugada = 1;
        $numero=($max+$min)/2;
        break;
    case "play":
        $rango=$_POST['rango'];
        switch($rango){
            case "mayor":
                $min=$_POST['numero'];
                $max=$_POST['max'];
                $jugada=$_POST['jugada']+1;
                $intentos = $_POST['intentos']-1;
                $numero = ($min+$max)/2;
                break;
            case "menor":
                $min=$_POST['min'];
                $max=$_POST['numero'];
                $jugada=$_POST['jugada']+1;
                $intentos = $_POST['intentos']-1;
                $numero = ($min+$max)/2;
                break;
            case "igual":

                break;
        }
        break;
    case "restart":
        break;
    case "back":

        break;

}

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Juego</title>
</head>
<body>
<h1>Empecemos...</h1>
<form action="juego.php" method="post">
    <fieldset>
        <h2>El número es... <?=$numero?></h2>

        <h2>Jugada nº <?=$jugada?></h2>
        <h3>Quedan <?=$intentos-1?> intentos restantes</h3>
        <fieldset>
            <input type="radio" name="rango" id="mayor" value="mayor" checked>
            <label for="mayor">Mayor que <?=$numero?></label>
            <br>
            <input type="radio" name="rango" id="igual" value="igual">
            <label for="igual">Igual a <?=$numero?></label>
            <br>
            <input type="radio" name="rango" id="menor" value="menor">
            <label for="menor">Menor que <?=$numero?></label>
        </fieldset>
    </fieldset>
    <fieldset id="buttons">
        <button id="botones" type="submit" name="submit" value="play">Jugar</button>
        <button id="botones" type="submit" name="submit" value="restart">Reiniciar</button>
        <button id="botones" type="submit" name="submit" value="back">Volver</button>
        <input type="hidden" name="max" value="<?=$max?>">
        <input type="hidden" name="min" value="<?=$min?>">
        <input type="hidden" name="numero" value="<?=$numero?>">
        <input type="hidden" name="intentos" value="<?=$intentos?>">
        <input type="hidden" name="jugada" value="<?=$jugada?>">
    </fieldset>
</form>
</body>
</html>
