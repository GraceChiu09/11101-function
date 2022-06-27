<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- print_r就會顯示陣列 -->
    $_SESSION["favcolor"] = "black";
    <?php print_r($_SESSION);?>
</body>
</html>