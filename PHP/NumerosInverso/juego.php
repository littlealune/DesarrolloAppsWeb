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
    case "restart":
        //recogemos intentos totales y generamos el número aleatorio
        $intentos = $_POST['intentos'];
        $jugada = 1;
        $numero = rand(1,(2**$_POST['intentos']));
        //(opcional) Oculta el cuadro de texto en el que se muestra "Mayor" o "menor"
        $mostrar="none";
        echo $numero;
        break;
    case "play":
        //recogemos valores
        $intentos = $_POST['intentos'] - 1;
        $numero = $_POST['numero'];
        //comprobamos intentos restantes
        if($intentos!=0) {
            $propuesto = $_POST['propuesto'];
            $jugada = $_POST['jugada'] + 1;
            //comparamos el número propuesto y el generado por la máquina
            switch ($numero <=> $propuesto) {
                case 1:
                    $mostrar = "inline";
                    $resultado = "Mayor";
                    break;
                case -1:
                    $mostrar = "inline";
                    $resultado = "Menor";
                    break;
                case 0:
                    header("Location:victoria.php");
            }
        }else{
            //Gestiona el caso "derrota" y utiliza session para enviar al (se puede cambiar por un mensaje oculto como el que se hace más arriba)
            session_abort();
            session_start();
            $_SESSION['numeroDerrota'] = $numero;
            header("Location:derrota.php");
        }
        break;
    case "back":
        //volvemos al index
        header("Location:index.php");
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
        <h2>¿Qué número es...?</h2>

        <h2>Jugada nº <?=$jugada?></h2>
        <h3>Quedan <?=$intentos?> intentos restantes</h3>
        <fieldset>
            <h4 style="display: <?=$mostrar?>"><?=$resultado?></h4>
            <label for="propuesto">Número: </label>
            <input type="number" id="propuesto" name="propuesto">
        </fieldset>
    </fieldset>
    <fieldset id="buttons">
        <button id="botones" type="submit" name="submit" value="play">Jugar</button>
        <button id="botones" type="submit" name="submit" value="restart">Reiniciar</button>
        <button id="botones" type="submit" name="submit" value="back">Volver</button>
        <input type="hidden" name="intentos" value="<?=$intentos?>">
        <input type="hidden" name="jugada" value="<?=$jugada?>">
        <input type="hidden" name="numero" value="<?=$numero?>"
    </fieldset>
</form>
</body>
</html>
