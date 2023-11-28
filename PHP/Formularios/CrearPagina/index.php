<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page creator</title>
</head>
<body>
<form action="NewPage.php" method="post">
    <fieldset>
    <legend>Creador de páginas</legend>
    <label for="CabeceraHeight">Altura de la cabecera: </label>
    <input type="number" id="CabeceraHeight" name="CabeceraHeight">
    <br>
    <label for="MenuHeight">Altura del menú: </label>
    <input type="number" id="MenuHeight" name="MenuHeight">
    <br>
    <label for="CabeceraWidth">Ancho de la cabecera: </label>
    <input type="number" id="CabeceraWidth" name="CabeceraWidth">
    <br>
    <label for="MenuWidth">Ancho del menú: </label>
    <input type="number" id="MenuWidth" name="MenuWidth">
    <br>
    <label for="ColorCabecera">Color de la cabecera: </label>
    <input type="color" id="ColorCabecera" name="ColorCabecera">
    <br>
    <label for="ColorMenu">Color del menú: </label>
    <input type="color" id="ColorMenu" name="ColorMenu">
    <br>
    <label for="ColorContent">Color del contenido: </label>
    <input type="color" id="ColorContent" name="ColorContent">
    <br>
    <label for="TitleSize">Tamaño del título en píxeles: </label>
    <input type="number" id="TitleSize" name="TitleSize">
    <br>
    <label for="TitleText">Texto del título: </label>
    <input type="text" id="TitleText" name="TitleText">
    </fieldset>
    <br>
    <button type="submit">ENVIAR</button>
</form>
</body>
</html>
