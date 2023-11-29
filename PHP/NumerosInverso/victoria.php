<?php
$opcion = $_POST['submit'] ?? "";

switch ($opcion){
    case "si":
        header("Location:index.php");
        break;
    case "no":
        //TODO cerrar ventana (no apto en Chrome)
        echo "<script type='text/javascript'>self.close();</script>";
        break;
    default:
        break;
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div style="margin:auto; display:block; background-color: green; color:white; text-align: center">
        <h1>HAS GANADO!!!!</h1>
    </div>
    <form action="victoria.php" method="post">
        <fieldset>
            <legend><h1>¿Quieres volver a jugar?</h1></legend>
            <button id="sino" type="submit" name="submit" value="si">Sí</button>
            <button id="sino" type="submit" name="submit" value="no">No</button>
        </fieldset>
    </form>
</body>
</html>