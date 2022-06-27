<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- session紀錄單獨頁面的行為who you are/what you done -->
    <?php

    echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
    
    ?>
</body>
</html>