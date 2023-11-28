<?php

/*$usuarioValido = "MARCO.SARA1";
$passwordValido = "1234";
$visible="hidden";
if(htmlspecialchars($_POST['username'])===$usuarioValido AND htmlspecialchars($_POST['password'])===$passwordValido){
    $ruta = "main.php";
}else{
    if(isset($_POST['submit'])){
        $visible="visible";
    }
    $ruta = "index.php";
*/

if(isset($_POST['submit'])){
    $nombre = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    if($nombre===$password AND !empty($nombre)){
        header("Location: main.php");
    }else{
        $visible="visible";
    }
}else{
    $visible="hidden";
}

?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
        <style>
            fieldset{
                background-color: paleturquoise;
            }
            p{
                visibility: <?=$visible?>;
            }
        </style>
    </head>
    <body>
        <form action="<?=$ruta?>" method="post">
            <p>USUARIO Y CONTRASEÑA NO VÁLIDOS</p>
            <fieldset>
                <legend>Login</legend>
                <label for="username">Usuario</label>
                <input type="text" name="username" id="username">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password">
                <input type="submit" name="submit">
            </fieldset>
        </form>
    </body>
</html>
