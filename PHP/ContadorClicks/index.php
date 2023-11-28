<?php
$numero = 0;
if(isset($_POST['submit'])){
    $numero=$_POST['clicks']+1;
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page creator</title>
</head>
<body>
    <h1>Has pulsado <?=$numero?> veces.</h1>
    <form action="index.php" method="post">
        <input type="hidden" value="<?=$numero?>" name="clicks">
        <input type="submit" name="submit">
    </form>
</body>
</html>
