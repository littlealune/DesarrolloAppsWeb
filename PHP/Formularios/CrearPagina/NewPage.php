<?php

$HeaderHeight = $_POST['CabeceraHeight'];
$MenuHeight = $_POST['MenuHeight'];
$HeaderWidth = $_POST['CabeceraWidth'];
$MenuWidth = $_POST['MenuWidth'];
$HeaderColor = $_POST['ColorCabecera'];
$MenuColor = $_POST['ColorMenu'];
$ContentColor = $_POST['ColorContent'];
$TitleSize = $_POST['TitleSize'];
$TitleText = $_POST['TitleText'];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New page</title>
    <style>
        *{
            margin:0;
        }
        header{
            background-color: <?=$HeaderColor?>;
            height: <?=$HeaderHeight?>;
            width: <?=$HeaderWidth?>;
        }
        h1{
            font-size: <?=$TitleSize?>;
        }
        nav{
            background-color: <?=$MenuColor?>;
            height: <?=$MenuHeight?>;
            width: <?=$MenuWidth?>;
            float: left;
        }
        main{
            background-color: <?=$ContentColor?>;
            float:right;
            width: calc(100% - <?=$MenuWidth?>)
        }
    </style>
</head>
<body>
<header>
    <h1><?=$TitleText?></h1>
</header>
<nav>
    <p>AAAAAAAAAAAAAAAAAAAAAAAA</p>
</nav>
<main>
    <p>Esto es un párrafo de prueba</p>
</main>
</body>
</html>